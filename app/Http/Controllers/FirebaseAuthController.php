<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FirebaseAuthController extends Controller
{
    /**
     * Display Firebase login page with configured OAuth domains
     */
    public function showFirebaseLogin()
    {
        try {
            $firebaseConfig = $this->getFirebaseConfig();
            
            return view('auth.firebase-login', [
                'firebaseConfig' => $firebaseConfig,
                'authorizedDomains' => $this->getAuthorizedDomains(),
            ]);
        } catch (\Exception $e) {
            Log::error('Firebase login page error: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);
            
            return redirect('/login')->withErrors('Unable to load Firebase login. Please try again.');
        }
    }

    /**
     * Handle Firebase OAuth callback
     * Called from frontend after successful Firebase authentication
     */
    public function handleFirebaseCallback(Request $request)
    {
        try {
            $firebaseUser = $request->validate([
                'uid' => 'required|string',
                'email' => 'required|email',
                'displayName' => 'nullable|string',
                'photoURL' => 'nullable|url',
            ]);

            // Validate domain is authorized
            if (!$this->isAuthorizedDomain($firebaseUser['email'])) {
                Log::warning('Unauthorized domain attempted login', [
                    'email' => $firebaseUser['email'],
                    'uid' => $firebaseUser['uid'],
                ]);
                
                return response()->json([
                    'success' => false,
                    'message' => 'Your domain is not authorized to access this application.',
                ], 403);
            }

            // Create or update user in database
            $user = $this->createOrUpdateUser($firebaseUser);

            // Authenticate user session
            Auth::login($user, remember: true);

            Log::info('Firebase user authenticated', [
                'user_id' => $user->id,
                'email' => $user->email,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Authentication successful',
                'redirect' => route('dashboard'),
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::warning('Firebase callback validation error', [
                'errors' => $e->errors(),
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Invalid authentication data',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            Log::error('Firebase callback error: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Authentication failed. Please try again.',
            ], 500);
        }
    }

    /**
     * Create or update user from Firebase data
     */
    private function createOrUpdateUser(array $firebaseUser): User
    {
        return User::updateOrCreate(
            ['email' => $firebaseUser['email']],
            [
                'firebase_uid' => $firebaseUser['uid'],
                'name' => $firebaseUser['displayName'] ?? 'User',
                'profile_picture' => $firebaseUser['photoURL'] ?? null,
                'is_firebase_user' => true,
                'last_login_at' => now(),
            ]
        );
    }

    /**
     * Get Firebase configuration from environment variables
     */
    private function getFirebaseConfig(): array
    {
        return [
            'apiKey' => config('firebase.api_key'),
            'authDomain' => config('firebase.auth_domain'),
            'projectId' => config('firebase.project_id'),
            'storageBucket' => config('firebase.storage_bucket'),
            'messagingSenderId' => config('firebase.messaging_sender_id'),
            'appId' => config('firebase.app_id'),
            'measurementId' => config('firebase.measurement_id', ''),
        ];
    }

    /**
     * Get list of authorized OAuth domains
     */
    private function getAuthorizedDomains(): array
    {
        $domains = config('firebase.authorized_domains', []);
        
        if (empty($domains)) {
            Log::warning('No authorized domains configured in firebase config');
            return [];
        }
        
        return $domains;
    }

    /**
     * Check if email domain is authorized
     */
    private function isAuthorizedDomain(string $email): bool
    {
        $authorizedDomains = $this->getAuthorizedDomains();
        
        if (empty($authorizedDomains)) {
            Log::warning('Authorization check with no domains configured');
            return false;
        }

        $emailDomain = substr(strrchr($email, "@"), 1);
        
        return in_array($emailDomain, $authorizedDomains);
    }

    /**
     * Logout user and destroy session
     */
    public function logout(Request $request)
    {
        try {
            Log::info('User logout', ['user_id' => Auth::id()]);
            
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/')->with('success', 'Successfully logged out');
        } catch (\Exception $e) {
            Log::error('Logout error: ' . $e->getMessage());
            return redirect('/')->with('error', 'Error during logout');
        }
    }
}

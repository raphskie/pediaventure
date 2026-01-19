<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth_mislan.student_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'id' => 'required',
            'mname' => 'required',
        ]);

        $user = User::find($credentials['id']);
        if ($user && $user->mname === $credentials['mname']) {
            Auth::login($user);
            return redirect()->intended('/student-panel');
        }

        return back()->withErrors(['id' => 'Invalid credentials'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}

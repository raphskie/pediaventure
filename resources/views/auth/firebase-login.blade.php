@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body p-5">
                    <h1 class="card-title text-center mb-4">Firebase OAuth Login</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <div id="firebaseAuthContainer" class="text-center">
                        <button id="firebaseLoginBtn" class="btn btn-primary btn-lg w-100 mb-3">
                            <i class="fab fa-google"></i> Sign in with Google
                        </button>
                        <p class="text-muted small">
                            Authorized domains: {{ implode(', ', $authorizedDomains) ?? 'Not configured' }}
                        </p>
                    </div>

                    <div id="firebaseLoading" class="text-center d-none">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Authenticating...</span>
                        </div>
                        <p class="mt-2">Authenticating...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/10.8.0/firebase-auth.js"></script>

<script>
    // Firebase Configuration
    const firebaseConfig = @json($firebaseConfig);

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    const auth = firebase.auth();

    // Set authorized domains
    auth.tenantId = '{{ config("firebase.project_id") }}';

    document.getElementById('firebaseLoginBtn').addEventListener('click', async function() {
        showLoading(true);

        try {
            const provider = new firebase.auth.GoogleAuthProvider();
            
            // Configure authorized domains
            const authorizedDomains = @json($authorizedDomains);
            if (authorizedDomains.length > 0) {
                provider.setCustomParameters({
                    'hd': authorizedDomains[0]
                });
            }

            const result = await auth.signInWithPopup(provider);
            
            if (result.user) {
                await handleFirebaseCallback(result.user);
            }
        } catch (error) {
            showLoading(false);
            console.error('Firebase authentication error:', error);
            
            let errorMessage = 'Authentication failed. Please try again.';
            if (error.code === 'auth/popup-blocked') {
                errorMessage = 'Popup was blocked. Please allow popups and try again.';
            } else if (error.code === 'auth/cancelled-popup-request') {
                errorMessage = 'Authentication cancelled.';
            } else if (error.code === 'auth/unauthorized-domain') {
                errorMessage = 'Your domain is not authorized.';
            }
            
            alert(errorMessage);
        }
    });

    async function handleFirebaseCallback(user) {
        try {
            const token = await user.getIdToken();
            
            const response = await fetch('{{ route("firebase.callback") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({
                    uid: user.uid,
                    email: user.email,
                    displayName: user.displayName,
                    photoURL: user.photoURL,
                    idToken: token,
                }),
            });

            const data = await response.json();

            if (!response.ok) {
                throw new Error(data.message || 'Authentication failed');
            }

            if (data.success) {
                window.location.href = data.redirect || '{{ route("dashboard") }}';
            } else {
                throw new Error(data.message);
            }
        } catch (error) {
            showLoading(false);
            console.error('Callback error:', error);
            alert(error.message || 'Authentication failed');
            
            // Sign out user if callback fails
            auth.signOut();
        }
    }

    function showLoading(isLoading) {
        document.getElementById('firebaseAuthContainer').classList.toggle('d-none', isLoading);
        document.getElementById('firebaseLoading').classList.toggle('d-none', !isLoading);
    }

    // Check if user is already logged in
    auth.onAuthStateChanged(function(user) {
        if (user && !user.isAnonymous) {
            handleFirebaseCallback(user);
        }
    });
</script>
@endsection

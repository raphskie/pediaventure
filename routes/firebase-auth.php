<?php

use App\Http\Controllers\FirebaseAuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    // Firebase OAuth Routes
    Route::get('/firebase-login', [FirebaseAuthController::class, 'showFirebaseLogin'])
        ->name('firebase.login');
    
    Route::post('/firebase/callback', [FirebaseAuthController::class, 'handleFirebaseCallback'])
        ->name('firebase.callback');
    
    Route::post('/firebase/logout', [FirebaseAuthController::class, 'logout'])
        ->name('firebase.logout');
});

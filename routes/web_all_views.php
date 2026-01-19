<?php

/**
 * AUTO-GENERATED ROUTES FOR ALL BLADE VIEWS
 * This file contains dynamically generated routes for every blade file in resources/views/
 * To use this, replace the contents of web.php with this file, or include it at the end of web.php
 */

use App\Http\Controllers\StudentLoginController;
use App\Http\Controllers\PersonalInformationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeaderboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// ============================================
// CORE APPLICATION ROUTES
// ============================================

// Home Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [LeaderboardController::class, 'index']);

// Authentication Routes
Route::get('/login', [StudentLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [StudentLoginController::class, 'login']);
Route::post('/logout', [StudentLoginController::class, 'logout'])->name('logout');

// Personal Information CRUD Routes
Route::get('/personal-information', [PersonalInformationController::class, 'index'])
    ->name('personal-information.index');

Route::get('/personal-information/create', [PersonalInformationController::class, 'create'])
    ->name('personal-information.create');

Route::post('/personal-information', [PersonalInformationController::class, 'store'])
    ->name('personal-information.store');

Route::delete('/personal-information/{id}', [PersonalInformationController::class, 'destroy'])
    ->name('personal-information.destroy');

// Dashboard Routes
Route::get('/studentregistration', [DashboardController::class, 'register']);
Route::get('/administrator', [DashboardController::class, 'administrator']);
Route::get('/user', [DashboardController::class, 'user']);
Route::get('/userlogin', [DashboardController::class, 'userlogin']);
Route::get('/signup', [DashboardController::class, 'signup']);
Route::get('/create', [DashboardController::class, 'create_list']);
Route::get('/index', [DashboardController::class, 'show_index']);
Route::get('/student_login', [DashboardController::class, 'student_login']);
Route::get('/records', [PersonalInformationController::class, 'index']);

// Panel Routes  
Route::get('/student-panel', [App\Http\Controllers\StudentPanelController::class, 'index'])
    ->middleware('auth')->name('student.panel');

Route::get('/teacher-panel', [App\Http\Controllers\TeacherPanelController::class, 'index'])
    ->name('teacher.panel');

Route::get('/game', function () {
    return view('game.main');
})->middleware('auth');

// Admin Routes
Route::get('/admindash', function () {
    return view('admindash');
});

Route::get('/analytics', function () {
    return view('analytics');
});

Route::get('/gradecodesmanage', function () {
    return view('gradecodesmanage');
});

Route::get('/adminlist', function () {
    return view('adminlist');
});

Route::get('/leaderboard', function () {
    return view('leaderboard');
});

Route::get('/changeadminpanelpassword', function () {
    return view('changeadminpanelpassword');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/achievements', function () {
    return view('achievements');
});

// Award Points Route (Points system)
Route::post('/award-points', function (Request $request) {
    $user = Auth::user();

    if ($user) {
        // TODO: Implement points system - save to database
        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false], 401);
});

// ============================================
// AUTO-GENERATED TOPIC AND VIEW ROUTES
// ============================================
// These routes are automatically generated from blade files in resources/views/
// Each route returns the corresponding view without a controller

// Filipino Topic Routes
Route::get('/filipinotopics', function () { return view('filipinotopics'); });
Route::get('/filipinotopiconelevels', function () { return view('filipinotopiconelevels'); });
Route::get('/filipinotopictwolevels', function () { return view('filipinotopictwolevels'); });
Route::get('/filipinotopicthreelevels', function () { return view('filipinotopicthreelevels'); });
Route::get('/filipinotopicfourlevels', function () { return view('filipinotopicfourlevels'); });
Route::get('/filipinotopicfivelevels', function () { return view('filipinotopicfivelevels'); });
Route::get('/filipinotopicsixlevels', function () { return view('filipinotopicsixlevels'); });
Route::get('/filipinotopicsevenlevels', function () { return view('filipinotopicsevenlevels'); });
Route::get('/filipinotopiceightlevels', function () { return view('filipinotopiceightlevels'); });
Route::get('/filipinotopicninelevels', function () { return view('filipinotopicninelevels'); });
Route::get('/filipinotopictenlevels', function () { return view('filipinotopictenlevels'); });
Route::get('/filipinotopicelevenlevels', function () { return view('filipinotopicelevenlevels'); });
Route::get('/filipinotopictwelvelevels', function () { return view('filipinotopictwelvelevels'); });
Route::get('/filipinotopicthirteenlevels', function () { return view('filipinotopicthirteenlevels'); });
Route::get('/filipinotopicfourteenlevels', function () { return view('filipinotopicfourteenlevels'); });
Route::get('/filipinotopicfifteenlevels', function () { return view('filipinotopicfifteenlevels'); });

// English Topic Routes
Route::get('/englishtopics', function () { return view('englishtopics'); });
Route::get('/englishtopiconelvlone', function () { return view('englishtopiconelvlone'); });
Route::get('/englishtopiconelevels', function () { return view('englishtopiconelevels'); });
Route::get('/englishtopictwolevels', function () { return view('englishtopictwolevels'); });
Route::get('/englishtopicthreelevels', function () { return view('englishtopicthreelevels'); });
Route::get('/englishtopicfourlevels', function () { return view('englishtopicfourlevels'); });
Route::get('/englishtopicfivelevels', function () { return view('englishtopicfivelevels'); });
Route::get('/englishtopicsixlevels', function () { return view('englishtopicsixlevels'); });
Route::get('/englishtopicsevenlevels', function () { return view('englishtopicsevenlevels'); });
Route::get('/englishtopiceightlevels', function () { return view('englishtopiceightlevels'); });
Route::get('/englishtopicninelevels', function () { return view('englishtopicninelevels'); });
Route::get('/englishtopictenlevels', function () { return view('englishtopictenlevels'); });
Route::get('/englishtopicelevenlevels', function () { return view('englishtopicelevenlevels'); });
Route::get('/englishtopictwelvelevels', function () { return view('englishtopictwelvelevels'); });
Route::get('/englishtopicthirteenlevels', function () { return view('englishtopicthirteenlevels'); });
Route::get('/englishtopicfourteenlevels', function () { return view('englishtopicfourteenlevels'); });
Route::get('/englishtopicfifteenlevels', function () { return view('englishtopicfifteenlevels'); });
Route::get('/englishtopicsixteenlevels', function () { return view('englishtopicsixteenlevels'); });
Route::get('/englishtopicseventeenlevels', function () { return view('englishtopicseventeenlevels'); });
Route::get('/englishtopiceighteenlevels', function () { return view('englishtopiceighteenlevels'); });
Route::get('/englishtopicnineteenlevels', function () { return view('englishtopicnineteenlevels'); });

// Math Topic Routes
Route::get('/mathtopics', function () { return view('mathtopics'); });
Route::get('/mathtopiconelevels', function () { return view('mathtopiconelevels'); });
Route::get('/mathtopictwolevels', function () { return view('mathtopictwolevels'); });
Route::get('/mathtopicthreelevels', function () { return view('mathtopicthreelevels'); });
Route::get('/mathtopicfourlevels', function () { return view('mathtopicfourlevels'); });
Route::get('/mathtopicfivelevels', function () { return view('mathtopicfivelevels'); });
Route::get('/mathtopicsixlevels', function () { return view('mathtopicsixlevels'); });
Route::get('/mathtopicsevenlevels', function () { return view('mathtopicsevenlevels'); });
Route::get('/mathtopiceightlevels', function () { return view('mathtopiceightlevels'); });
Route::get('/mathtopicninelevels', function () { return view('mathtopicninelevels'); });
Route::get('/mathtopictenlevels', function () { return view('mathtopictenlevels'); });
Route::get('/mathtopicelevenlevels', function () { return view('mathtopicelevenlevels'); });
Route::get('/mathtopictwelvelevels', function () { return view('mathtopictwelvelevels'); });
Route::get('/mathtopicthirteenlevels', function () { return view('mathtopicthirteenlevels'); });
Route::get('/mathtopicfourteenlevels', function () { return view('mathtopicfourteenlevels'); });
Route::get('/mathtopicfifteenlevels', function () { return view('mathtopicfifteenlevels'); });
Route::get('/mathtopicsixteenlevels', function () { return view('mathtopicsixteenlevels'); });
Route::get('/mathtopicseventeenlevels', function () { return view('mathtopicseventeenlevels'); });

Route::get('/mathselection', function () { return view('mathselection'); });
Route::get('/dashboard', function () { return view('dashboard'); });

// TODO: Add routes for individual topic sub-levels (level 1-10 for each topic level)
// For performance, consider using route model binding or organized route groups instead

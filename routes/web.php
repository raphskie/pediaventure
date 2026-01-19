<?php

use App\Http\Controllers\StudentLoginController;
use App\Http\Controllers\PersonalInformationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\FilipinoTopicController;
use App\Http\Controllers\EnglishTopicController;
use App\Http\Controllers\MathTopicController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
// TOPIC ROUTES - CONNECTED TO CONTROLLERS
// ============================================

// Filipino Topic Routes
Route::get('/filipinotopics', [FilipinoTopicController::class, 'index']);
Route::get('/filipinotopiconelevels', [FilipinoTopicController::class, 'levelOne']);
Route::get('/filipinotopictwolevels', [FilipinoTopicController::class, 'levelTwo']);
Route::get('/filipinotopicthreelevels', [FilipinoTopicController::class, 'levelThree']);
Route::get('/filipinotopicfourlevels', [FilipinoTopicController::class, 'levelFour']);
Route::get('/filipinotopicfivelevels', [FilipinoTopicController::class, 'levelFive']);
Route::get('/filipinotopicsixlevels', [FilipinoTopicController::class, 'levelSix']);
Route::get('/filipinotopicsevenlevels', [FilipinoTopicController::class, 'levelSeven']);
Route::get('/filipinotopiceightlevels', [FilipinoTopicController::class, 'levelEight']);
Route::get('/filipinotopicninelevels', [FilipinoTopicController::class, 'levelNine']);
Route::get('/filipinotopictenlevels', [FilipinoTopicController::class, 'levelTen']);
Route::get('/filipinotopicelevenlevels', [FilipinoTopicController::class, 'levelEleven']);
Route::get('/filipinotopictwelvelevels', [FilipinoTopicController::class, 'levelTwelve']);
Route::get('/filipinotopicthirteenlevels', [FilipinoTopicController::class, 'levelThirteen']);
Route::get('/filipinotopicfourteenlevels', [FilipinoTopicController::class, 'levelFourteen']);
Route::get('/filipinotopicfifteenlevels', [FilipinoTopicController::class, 'levelFifteen']);

// Filipino Topic Sub-levels (Level 1)
Route::get('/filipinotopiconelvlone', [FilipinoTopicController::class, 'levelOneSubOne']);
Route::get('/filipinotopiconelvltwo', [FilipinoTopicController::class, 'levelOneSubTwo']);
Route::get('/filipinotopiconelvlthree', [FilipinoTopicController::class, 'levelOneSubThree']);
Route::get('/filipinotopiconelvlfour', [FilipinoTopicController::class, 'levelOneSubFour']);
Route::get('/filipinotopiconelvlfive', [FilipinoTopicController::class, 'levelOneSubFive']);
Route::get('/filipinotopiconelvlsix', [FilipinoTopicController::class, 'levelOneSubSix']);
Route::get('/filipinotopiconelvlseven', [FilipinoTopicController::class, 'levelOneSubSeven']);
Route::get('/filipinotopiconelvleight', [FilipinoTopicController::class, 'levelOneSubEight']);
Route::get('/filipinotopiconelvlnine', [FilipinoTopicController::class, 'levelOneSubNine']);
Route::get('/filipinotopiconelvlten', [FilipinoTopicController::class, 'levelOneSubTen']);

// English Topic Routes
Route::get('/englishtopics', [EnglishTopicController::class, 'index']);
Route::get('/englishtopiconelevels', [EnglishTopicController::class, 'levelOne']);
Route::get('/englishtopictwolevels', [EnglishTopicController::class, 'levelTwo']);
Route::get('/englishtopicthreelevels', [EnglishTopicController::class, 'levelThree']);
Route::get('/englishtopicfourlevels', [EnglishTopicController::class, 'levelFour']);
Route::get('/englishtopicfivelevels', [EnglishTopicController::class, 'levelFive']);
Route::get('/englishtopicsixlevels', [EnglishTopicController::class, 'levelSix']);
Route::get('/englishtopicsevenlevels', [EnglishTopicController::class, 'levelSeven']);
Route::get('/englishtopiceightlevels', [EnglishTopicController::class, 'levelEight']);
Route::get('/englishtopicninelevels', [EnglishTopicController::class, 'levelNine']);
Route::get('/englishtopictenlevels', [EnglishTopicController::class, 'levelTen']);
Route::get('/englishtopicelevenlevels', [EnglishTopicController::class, 'levelEleven']);
Route::get('/englishtopictwelvelevels', [EnglishTopicController::class, 'levelTwelve']);
Route::get('/englishtopicthirteenlevels', [EnglishTopicController::class, 'levelThirteen']);
Route::get('/englishtopicfourteenlevels', [EnglishTopicController::class, 'levelFourteen']);
Route::get('/englishtopicfifteenlevels', [EnglishTopicController::class, 'levelFifteen']);
Route::get('/englishtopicsixteenlevels', [EnglishTopicController::class, 'levelSixteen']);
Route::get('/englishtopicseventeenlevels', [EnglishTopicController::class, 'levelSeventeen']);
Route::get('/englishtopiceighteenlevels', [EnglishTopicController::class, 'levelEighteen']);
Route::get('/englishtopicnineteenlevels', [EnglishTopicController::class, 'levelNineteen']);

// English Topic Sub-levels (Level 1)
Route::get('/englishtopiconelvlone', [EnglishTopicController::class, 'levelOneSubOne']);
Route::get('/englishtopiconelvltwo', [EnglishTopicController::class, 'levelOneSubTwo']);
Route::get('/englishtopiconelvlthree', [EnglishTopicController::class, 'levelOneSubThree']);
Route::get('/englishtopiconelvlfour', [EnglishTopicController::class, 'levelOneSubFour']);
Route::get('/englishtopiconelvlfive', [EnglishTopicController::class, 'levelOneSubFive']);
Route::get('/englishtopiconelvlsix', [EnglishTopicController::class, 'levelOneSubSix']);
Route::get('/englishtopiconelvlseven', [EnglishTopicController::class, 'levelOneSubSeven']);
Route::get('/englishtopiconelvleight', [EnglishTopicController::class, 'levelOneSubEight']);
Route::get('/englishtopiconelvlnine', [EnglishTopicController::class, 'levelOneSubNine']);
Route::get('/englishtopiconelvlten', [EnglishTopicController::class, 'levelOneSubTen']);

// Math Topic Routes
Route::get('/mathtopics', [MathTopicController::class, 'index']);
Route::get('/mathtopiconelevels', [MathTopicController::class, 'levelOne']);
Route::get('/mathtopictwolevels', [MathTopicController::class, 'levelTwo']);
Route::get('/mathtopicthreelevels', [MathTopicController::class, 'levelThree']);
Route::get('/mathtopicfourlevels', [MathTopicController::class, 'levelFour']);
Route::get('/mathtopicfivelevels', [MathTopicController::class, 'levelFive']);
Route::get('/mathtopicsixlevels', [MathTopicController::class, 'levelSix']);
Route::get('/mathtopicsevenlevels', [MathTopicController::class, 'levelSeven']);
Route::get('/mathtopiceightlevels', [MathTopicController::class, 'levelEight']);
Route::get('/mathtopicninelevels', [MathTopicController::class, 'levelNine']);
Route::get('/mathtopictenlevels', [MathTopicController::class, 'levelTen']);
Route::get('/mathtopicelevenlevels', [MathTopicController::class, 'levelEleven']);
Route::get('/mathtopictwelvelevels', [MathTopicController::class, 'levelTwelve']);
Route::get('/mathtopicthirteenlevels', [MathTopicController::class, 'levelThirteen']);
Route::get('/mathtopicfourteenlevels', [MathTopicController::class, 'levelFourteen']);
Route::get('/mathtopicfifteenlevels', [MathTopicController::class, 'levelFifteen']);
Route::get('/mathtopicsixteenlevels', [MathTopicController::class, 'levelSixteen']);
Route::get('/mathtopicseventeenlevels', [MathTopicController::class, 'levelSeventeen']);

// Math Topic Sub-levels (Level 1)
Route::get('/mathtopiconelvlone', [MathTopicController::class, 'levelOneSubOne']);
Route::get('/mathtopiconelvltwo', [MathTopicController::class, 'levelOneSubTwo']);
Route::get('/mathtopiconelvlthree', [MathTopicController::class, 'levelOneSubThree']);
Route::get('/mathtopiconelvlfour', [MathTopicController::class, 'levelOneSubFour']);
Route::get('/mathtopiconelvlfive', [MathTopicController::class, 'levelOneSubFive']);
Route::get('/mathtopiconelvlsix', [MathTopicController::class, 'levelOneSubSix']);
Route::get('/mathtopiconelvlseven', [MathTopicController::class, 'levelOneSubSeven']);
Route::get('/mathtopiconelvleight', [MathTopicController::class, 'levelOneSubEight']);
Route::get('/mathtopiconelvlnine', [MathTopicController::class, 'levelOneSubNine']);
Route::get('/mathtopiconelvlten', [MathTopicController::class, 'levelOneSubTen']);

// Math Selection
Route::get('/mathselection', [MathTopicController::class, 'selection']);

// ============================================
// TUTORIAL ROUTES - CONNECTED TO CONTROLLERS
// ============================================

// Filipino Tutorials
Route::get('/filipinotopiconetut', [FilipinoTopicController::class, 'tutorialOne']);
Route::get('/filipinotopictwotut', [FilipinoTopicController::class, 'tutorialTwo']);
Route::get('/filipinotopicthreetut', [FilipinoTopicController::class, 'tutorialThree']);
Route::get('/filipinotopicfourtut', [FilipinoTopicController::class, 'tutorialFour']);
Route::get('/filipinotopicfivetut', [FilipinoTopicController::class, 'tutorialFive']);
Route::get('/filipinotopicsixtut', [FilipinoTopicController::class, 'tutorialSix']);
Route::get('/filipinotopicseventut', [FilipinoTopicController::class, 'tutorialSeven']);
Route::get('/filipinotopiceighttut', [FilipinoTopicController::class, 'tutorialEight']);
Route::get('/filipinotopicninetut', [FilipinoTopicController::class, 'tutorialNine']);
Route::get('/filipinotopictentut', [FilipinoTopicController::class, 'tutorialTen']);
Route::get('/filipinotopiceleventut', [FilipinoTopicController::class, 'tutorialEleven']);
Route::get('/filipinotopictwelvetut', [FilipinoTopicController::class, 'tutorialTwelve']);
Route::get('/filipinotopicthirteentut', [FilipinoTopicController::class, 'tutorialThirteen']);
Route::get('/filipinotopicfourteentut', [FilipinoTopicController::class, 'tutorialFourteen']);
Route::get('/filipinotopicfifteentut', [FilipinoTopicController::class, 'tutorialFifteen']);

// English Tutorials
Route::get('/englishtopiconetut', [EnglishTopicController::class, 'tutorialOne']);
Route::get('/englishtopictwotut', [EnglishTopicController::class, 'tutorialTwo']);
Route::get('/englishtopicthreetut', [EnglishTopicController::class, 'tutorialThree']);
Route::get('/englishtopicfourtut', [EnglishTopicController::class, 'tutorialFour']);
Route::get('/englishtopicfivetut', [EnglishTopicController::class, 'tutorialFive']);
Route::get('/englishtopicsixtut', [EnglishTopicController::class, 'tutorialSix']);
Route::get('/englishtopicseventut', [EnglishTopicController::class, 'tutorialSeven']);
Route::get('/englishtopiceighttut', [EnglishTopicController::class, 'tutorialEight']);
Route::get('/englishtopicninetut', [EnglishTopicController::class, 'tutorialNine']);
Route::get('/englishtopictentut', [EnglishTopicController::class, 'tutorialTen']);
Route::get('/englishtopiceleventut', [EnglishTopicController::class, 'tutorialEleven']);
Route::get('/englishtopictwelvetut', [EnglishTopicController::class, 'tutorialTwelve']);
Route::get('/englishtopicthirteentut', [EnglishTopicController::class, 'tutorialThirteen']);
Route::get('/englishtopicfourteentut', [EnglishTopicController::class, 'tutorialFourteen']);
Route::get('/englishtopicfifteentut', [EnglishTopicController::class, 'tutorialFifteen']);
Route::get('/englishtopicsixteentut', [EnglishTopicController::class, 'tutorialSixteen']);
Route::get('/englishtopicseventeentut', [EnglishTopicController::class, 'tutorialSeventeen']);
Route::get('/englishtopiceighteentut', [EnglishTopicController::class, 'tutorialEighteen']);
Route::get('/englishtopicnineteentut', [EnglishTopicController::class, 'tutorialNineteen']);

// Math Tutorials
Route::get('/mathtopiconetut', [MathTopicController::class, 'tutorialOne']);
Route::get('/mathtopictwotut', [MathTopicController::class, 'tutorialTwo']);
Route::get('/mathtopicthreetut', [MathTopicController::class, 'tutorialThree']);
Route::get('/mathtopicfourtut', [MathTopicController::class, 'tutorialFour']);
Route::get('/mathtopicfivetut', [MathTopicController::class, 'tutorialFive']);
Route::get('/mathtopicsixtut', [MathTopicController::class, 'tutorialSix']);
Route::get('/mathtopicseventut', [MathTopicController::class, 'tutorialSeven']);
Route::get('/mathtopiceighttut', [MathTopicController::class, 'tutorialEight']);
Route::get('/mathtopicninetut', [MathTopicController::class, 'tutorialNine']);
Route::get('/mathtopictentut', [MathTopicController::class, 'tutorialTen']);
Route::get('/mathtopiceleventut', [MathTopicController::class, 'tutorialEleven']);
Route::get('/mathtopictwelvetut', [MathTopicController::class, 'tutorialTwelve']);
Route::get('/mathtopicthirteentut', [MathTopicController::class, 'tutorialThirteen']);
Route::get('/mathtopicfourteentut', [MathTopicController::class, 'tutorialFourteen']);
Route::get('/mathtopicfifteentut', [MathTopicController::class, 'tutorialFifteen']);
Route::get('/mathtopicsixteentut', [MathTopicController::class, 'tutorialSixteen']);
Route::get('/mathtopicseventeentut', [MathTopicController::class, 'tutorialSeventeen']);

// Dashboard
Route::get('/dashboard', function () { return view('dashboard'); });

// ============================================
// DYNAMIC SUB-LEVEL ROUTES (ALL LEVELS 2-19)
// ============================================
// These routes dynamically handle any topic level with sub-level views

// Filipino Sub-levels (Levels 2-15)
Route::get('/filipinotopic{level}lvl{sublevel}', function ($level, $sublevel) {
    $viewName = 'filipinotopic' . $level . 'lvl' . $sublevel;
    if (view()->exists($viewName)) {
        return view($viewName);
    }
    abort(404);
})->where(['level' => '[a-z]+', 'sublevel' => '[a-z]+']);

// English Sub-levels (Levels 2-19)
Route::get('/englishtopic{level}lvl{sublevel}', function ($level, $sublevel) {
    $viewName = 'englishtopic' . $level . 'lvl' . $sublevel;
    if (view()->exists($viewName)) {
        return view($viewName);
    }
    abort(404);
})->where(['level' => '[a-z]+', 'sublevel' => '[a-z]+']);

// Math Sub-levels (Levels 2-17)
Route::get('/mathtopic{level}lvl{sublevel}', function ($level, $sublevel) {
    $viewName = 'mathtopic' . $level . 'lvl' . $sublevel;
    if (view()->exists($viewName)) {
        return view($viewName);
    }
    abort(404);
})->where(['level' => '[a-z]+', 'sublevel' => '[a-z]+']);

// Fallback for undefined routes
Route::fallback(function () {
    abort(404);
});


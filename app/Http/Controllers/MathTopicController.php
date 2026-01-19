<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MathTopicController extends Controller
{
    /**
     * Math Topic Main View
     */
    public function index(): View
    {
        return view('mathtopics');
    }

    /**
     * Math Topic Levels
     */
    public function levelOne(): View { return view('mathtopiconelevels'); }
    public function levelTwo(): View { return view('mathtopictwolevels'); }
    public function levelThree(): View { return view('mathtopicthreelevels'); }
    public function levelFour(): View { return view('mathtopicfourlevels'); }
    public function levelFive(): View { return view('mathtopicfivelevels'); }
    public function levelSix(): View { return view('mathtopicsixlevels'); }
    public function levelSeven(): View { return view('mathtopicsevenlevels'); }
    public function levelEight(): View { return view('mathtopiceightlevels'); }
    public function levelNine(): View { return view('mathtopicninelevels'); }
    public function levelTen(): View { return view('mathtopictenlevels'); }
    public function levelEleven(): View { return view('mathtopicelevenlevels'); }
    public function levelTwelve(): View { return view('mathtopictwelvelevels'); }
    public function levelThirteen(): View { return view('mathtopicthirteenlevels'); }
    public function levelFourteen(): View { return view('mathtopicfourteenlevels'); }
    public function levelFifteen(): View { return view('mathtopicfifteenlevels'); }
    public function levelSixteen(): View { return view('mathtopicsixteenlevels'); }
    public function levelSeventeen(): View { return view('mathtopicseventeenlevels'); }

    /**
     * Math Topic Sub-levels (Level 1)
     */
    public function levelOneSubOne(): View { return view('mathtopiconelvlone'); }
    public function levelOneSubTwo(): View { return view('mathtopiconelvltwo'); }
    public function levelOneSubThree(): View { return view('mathtopiconelvlthree'); }
    public function levelOneSubFour(): View { return view('mathtopiconelvlfour'); }
    public function levelOneSubFive(): View { return view('mathtopiconelvlfive'); }
    public function levelOneSubSix(): View { return view('mathtopiconelvlsix'); }
    public function levelOneSubSeven(): View { return view('mathtopiconelvlseven'); }
    public function levelOneSubEight(): View { return view('mathtopiconelvleight'); }
    public function levelOneSubNine(): View { return view('mathtopiconelvlnine'); }
    public function levelOneSubTen(): View { return view('mathtopiconelvlten'); }

    /**
     * Math Selection Page
     */
    public function selection(): View
    {
        return view('mathselection');
    }

    /**
     * Math Topic Tutorials
     */
    public function tutorialOne(): View { return view('mathtopiconetut'); }
    public function tutorialTwo(): View { return view('mathtopictwotut'); }
    public function tutorialThree(): View { return view('mathtopicthreetut'); }
    public function tutorialFour(): View { return view('mathtopicfourtut'); }
    public function tutorialFive(): View { return view('mathtopicfivetut'); }
    public function tutorialSix(): View { return view('mathtopicsixtut'); }
    public function tutorialSeven(): View { return view('mathtopicseventut'); }
    public function tutorialEight(): View { return view('mathtopiceighttut'); }
    public function tutorialNine(): View { return view('mathtopicninetut'); }
    public function tutorialTen(): View { return view('mathtopictentut'); }
    public function tutorialEleven(): View { return view('mathtopiceleventut'); }
    public function tutorialTwelve(): View { return view('mathtopictwelvetut'); }
    public function tutorialThirteen(): View { return view('mathtopicthirteentut'); }
    public function tutorialFourteen(): View { return view('mathtopicfourteentut'); }
    public function tutorialFifteen(): View { return view('mathtopicfifteentut'); }
    public function tutorialSixteen(): View { return view('mathtopicsixteentut'); }
    public function tutorialSeventeen(): View { return view('mathtopicseventeentut'); }
}

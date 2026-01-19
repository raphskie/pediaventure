<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class EnglishTopicController extends Controller
{
    /**
     * English Topic Main View
     */
    public function index(): View
    {
        return view('englishtopics');
    }

    /**
     * English Topic Levels
     */
    public function levelOne(): View { return view('englishtopiconelevels'); }
    public function levelTwo(): View { return view('englishtopictwolevels'); }
    public function levelThree(): View { return view('englishtopicthreelevels'); }
    public function levelFour(): View { return view('englishtopicfourlevels'); }
    public function levelFive(): View { return view('englishtopicfivelevels'); }
    public function levelSix(): View { return view('englishtopicsixlevels'); }
    public function levelSeven(): View { return view('englishtopicsevenlevels'); }
    public function levelEight(): View { return view('englishtopiceightlevels'); }
    public function levelNine(): View { return view('englishtopicninelevels'); }
    public function levelTen(): View { return view('englishtopictenlevels'); }
    public function levelEleven(): View { return view('englishtopicelevenlevels'); }
    public function levelTwelve(): View { return view('englishtopictwelvelevels'); }
    public function levelThirteen(): View { return view('englishtopicthirteenlevels'); }
    public function levelFourteen(): View { return view('englishtopicfourteenlevels'); }
    public function levelFifteen(): View { return view('englishtopicfifteenlevels'); }
    public function levelSixteen(): View { return view('englishtopicsixteenlevels'); }
    public function levelSeventeen(): View { return view('englishtopicseventeenlevels'); }
    public function levelEighteen(): View { return view('englishtopiceighteenlevels'); }
    public function levelNineteen(): View { return view('englishtopicnineteenlevels'); }

    /**
     * English Topic Sub-levels (Level 1)
     */
    public function levelOneSubOne(): View { return view('englishtopiconelvlone'); }
    public function levelOneSubTwo(): View { return view('englishtopiconelvltwo'); }
    public function levelOneSubThree(): View { return view('englishtopiconelvlthree'); }
    public function levelOneSubFour(): View { return view('englishtopiconelvlfour'); }
    public function levelOneSubFive(): View { return view('englishtopiconelvlfive'); }
    public function levelOneSubSix(): View { return view('englishtopiconelvlsix'); }
    public function levelOneSubSeven(): View { return view('englishtopiconelvlseven'); }
    public function levelOneSubEight(): View { return view('englishtopiconelvleight'); }
    public function levelOneSubNine(): View { return view('englishtopiconelvlnine'); }
    public function levelOneSubTen(): View { return view('englishtopiconelvlten'); }

    /**
     * English Topic Tutorials
     */
    public function tutorialOne(): View { return view('englishtopiconetut'); }
    public function tutorialTwo(): View { return view('englishtopictwotut'); }
    public function tutorialThree(): View { return view('englishtopicthreetut'); }
    public function tutorialFour(): View { return view('englishtopicfourtut'); }
    public function tutorialFive(): View { return view('englishtopicfivetut'); }
    public function tutorialSix(): View { return view('englishtopicsixtut'); }
    public function tutorialSeven(): View { return view('englishtopicseventut'); }
    public function tutorialEight(): View { return view('englishtopiceighttut'); }
    public function tutorialNine(): View { return view('englishtopicninetut'); }
    public function tutorialTen(): View { return view('englishtopictentut'); }
    public function tutorialEleven(): View { return view('englishtopiceleventut'); }
    public function tutorialTwelve(): View { return view('englishtopictwelvetut'); }
    public function tutorialThirteen(): View { return view('englishtopicthirteentut'); }
    public function tutorialFourteen(): View { return view('englishtopicfourteentut'); }
    public function tutorialFifteen(): View { return view('englishtopicfifteentut'); }
    public function tutorialSixteen(): View { return view('englishtopicsixteentut'); }
    public function tutorialSeventeen(): View { return view('englishtopicseventeentut'); }
    public function tutorialEighteen(): View { return view('englishtopiceighteentut'); }
    public function tutorialNineteen(): View { return view('englishtopicnineteentut'); }
}

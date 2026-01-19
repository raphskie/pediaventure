<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherPanelController extends Controller
{
    public function index()
    {
        // For teachers using Firebase, personalization can be added later if needed
        return view('teacher_panel');
    }
}

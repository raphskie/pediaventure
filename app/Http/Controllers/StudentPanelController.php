<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPanelController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('student_pannel', compact('user'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function register()
    {
        return view('signup');
    }

    public function administrator()
    {
        return view('administrator');
    }

    public function user()
    {
        return view('user');
    }

    public function userlogin()
    {
        return view('userlogin');
    }

    public function signup()
    {
        return view('signup');
    }

    public function create_list()
    {
        return view('personal_information_admin.create');
    }

    public function show_index()
    {
        return view('personal_information_admin.index');
    }

    public function student_login()
    {
        return view('auth_mislan.student_login');
    }

}

@extends('layout.administratorlayoutmislan')
@section('administrator_content')

<div id="user-info" class="username" style="text-align: center; margin-bottom: 20px; font-weight: bold;"></div>

<div class="container">


    <div class="container admindiv1 d-flex" id="register-section">

        <div class="h1-admin">
            <h1 class="">Register Student Information</h1>
            <p class="">Allows administrators to register <br>and manage student records efficiently.</p>
            <div class="admindiv2">
            <a href="create" class="adminlink1 w-100 h-25">Register</a>
        </div>
    </div>

    <div class="img-admin">
            <img src="https://i.ibb.co/wZ1CKM7P/0006.png" class="img1-admin" alt="0006" border="0">
        </div>

    </div>

    <div class="container admindiv1 d-flex" id="classlist-section">

    <div class="img-admin">
            <img src="https://i.ibb.co/gbHmpgxL/0007.png" class="img1-admin" alt="0006" border="0">
        </div>

        <div class="h1-admin">
            <h1 class="">Class List</h1>
            <p class="">Shows the list of students enrolled in a class.</p>
            <div class="admindiv2">
            <a href="{{ route('personal-information.index') }}" id="classlist-link" class="adminlink1 w-100 h-25">Open Class List</a>
        </div>
        </div>

    </div>


    <div class="container admindiv1 d-flex" id="lessons-section">

        <div class="h1-admin">
            <h1 class="">Lessons and Games</h1>
            <p class="">Combines learning materials and interactive games <br>to enhance student engagement and understanding.</p>
            <div class="admindiv2">
            <a href="/student-panel" class="adminlink1 w-100 h-25">Lessons and Games</a>
        </div>
    </div>

    <div class="img-admin">
            <img src="https://i.ibb.co/mC7n3Hf4/0009.png" class="img1-admin" alt="0006" border="0">
        </div>

    </div>

    <div class="container admindiv1 d-flex" id="personalinfo-section">

    <div class="img-admin">
            <img src="https://i.ibb.co/0R8dT2QJ/0008.png" class="img1-admin" alt="0006" border="0">
        </div>

        <div class="h1-admin">
            <h1 class="">Logout</h1>
            <p class="">You will be signed out of your account.</p>
            <div class="admindiv2">
            <a href="user" class="adminlink1 w-100 h-25">Log out</a>
        </div>
        </div>

    </div>

</div>

<script type="module" src="{{ asset('js/login.js') }}" defer></script>



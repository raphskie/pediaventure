@extends('layout.layoutmislan')
@section('content')

<div class="container login-div">

    <div class="margindiv">
        <div class="w-75 mx-auto">
            <h1 class="h1-user1">WHAT TYPE OF USER ARE YOU?</h1>
        </div>

        <div class="w-50 mx-auto">
            <a href="userlogin" class="link1 btn btn-outline w-100">TEACHER/ADMIN</a>
        </div>

        <div class="w-50 mx-auto">
            <a href="student_login" class="link2 btn btn-outline w-100">STUDENT</a>
        </div>

        <div class="login-signup-div w-100">
  <button type="button" onclick="history.back()" style="background-color: #a3ffa2; color: #248b28; font-weight: 600; padding: 13px; border-radius: 11px; border: solid 4px #4b9b02; width: 100%; max-width: 300px; margin: 0 auto; display: block;">Back To Previous Page</button>

</div>

    </div>
</div>


<!--
<div class="d-flex">
    <img src="https://i.ibb.co/6JppL0CW/cloud1.png" class="bg-primary w-50 h-50 px-0 py-0" alt="cloud1" border="0">
    <img src="https://i.ibb.co/21MnsVj1/cloud2.png" class="bg-secondary w-50 h-50 px-0 py-0" alt="cloud2" border="0">
    <img src="https://i.ibb.co/mV8csPFZ/cloud3.png" class="bg-success w-50 h-50 px-0 py-0" alt="cloud3" border="0">
</div>

<div class="d-flex clouds2">
    <img src="https://i.ibb.co/6JppL0CW/cloud1.png" class="bg-primary w-50 h-50 px-0 py-0" alt="cloud1" border="0">
    <img src="https://i.ibb.co/21MnsVj1/cloud2.png" class="bg-secondary w-50 h-50 px-0 py-0" alt="cloud2" border="0">
    <img src="https://i.ibb.co/mV8csPFZ/cloud3.png" class="bg-success w-50 h-50 px-0 py-0" alt="cloud3" border="0">
</div>

-->

@endsection


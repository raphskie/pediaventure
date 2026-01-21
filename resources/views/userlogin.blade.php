@extends('layout.layoutmislan')
@section('content')

<form id="myForm" class="p-4">

<div class="w-25 logo-div">
    <img src="https://i.ibb.co/GrbpbWr/logo.png" alt="logo" class="ms-3 me-3">
</div>

<div class="w-50 mx-auto">
    <h1 class="ms-3 me-3 h1-login">LOGIN TO PEDIAVENTURE</h1>
</div>

  <div class="mb-0">
    <input type="email" name="email" class="form-control login-input" placeholder="Email" id="email" required>
  </div>

  <div class="mb-0">
    <input type="password" name="password" class="form-control login-input" placeholder="Password" id="password" required>
  </div>

  <div class="login-signup-div w-100">
  <button type="submit" class="btn login-submit" id="submit">Submit</button>
    </div>

  <div class="login-signup-div w-100">
        <a href="signup" class="login-signup btn">Create A New Account</a>
  </div>

  <div class="login-signup-div w-100">
  <button type="button" onclick="history.back()" style="background-color: #a3ffa2; color: #248b28; font-weight: 600; padding: 13px; border-radius: 11px; border: solid 4px #4b9b02; width: 100%; max-width: 300px; margin: 0 auto; display: block;">Back To Previous Page</button>

</div>
</form>

@endsection


@extends('layout.layoutmislan')
@section('content')

<form id="myForm" class="p-4" method="POST" action="{{ route('login') }}">
    @csrf

    @if ($errors->any())
        <div style="color: red; font-weight: bold; text-align: center; margin-bottom: 10px;">
            Invalid credentials. Please check your Student ID and Middle Name.
        </div>
    @endif

<div class="w-25 logo-div">
    <img src="https://i.ibb.co/GrbpbWr/logo.png" alt="logo" class="ms-3 me-3">
</div>

<div class="w-50 mx-auto">
    <h1 class="ms-3 me-3 h1-studentlogin">LOGIN TO PEDIAVENTURE</h1>
</div>

  <div class="mb-0">
    <input type="text" name="id" class="form-control login-input" placeholder="Student ID" id="id" value="{{ old('id') }}" required autofocus>
    @error('id')
        <span>{{ $message }}</span>
    @enderror
  </div>

  <div class="mb-0">
    <input type="text" name="mname" class="form-control login-input" placeholder="Middle Name" id="mname" required>
    @error('mname')
        <span>{{ $message }}</span>
    @enderror
  </div>

  <div class="login-signup-div w-100">
  <button type="submit" style="background-color: #a3ffa2; color: #248b28; font-weight: 600; padding: 13px; border-radius: 11px; border: solid 4px #4b9b02; width: 100%; max-width: 300px; margin: 0 auto; display: block;">Log in</button>

</form>

<script>
document.getElementById('myForm').addEventListener('submit', function(e) {
    const id = document.getElementById('id').value.trim();
    const mname = document.getElementById('mname').value.trim();
    if (!id || !mname) {
        e.preventDefault();
        alert('Please fill in both Student ID and Middle Name.');
    }
});

@endsection


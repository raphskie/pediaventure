@extends('layout.administratorlayoutmislan')
@section('administrator_content')

<div class="container create">
<h2>Register Student Information</h2>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('personal-information.store') }}">
    @csrf
    <input type="hidden" name="created_by" id="created_by">

    <input class="design" type="text" name="lname" placeholder="Last Name" required><br><br>
    <input class="design" type="text" name="fname" placeholder="First Name" required><br><br>
    <input class="design" type="text" name="mname" placeholder="Middle Name"><br><br>
    <input class="design" type="number" name="age" placeholder="Age" id="age" required><br><br>

    <select class="bg-secondary design" name="sex" required>
        <option value="">Select Sex</option>
        <option>Male</option>
        <option>Female</option>
    </select><br><br>

    {{-- START OF ADDED FIELDS --}}
    <textarea class="design" name="address" placeholder="Full Address" required></textarea><br><br>
    <input class="design" type="text" name="guardian_name" placeholder="Guardian Name" required><br><br>
    <input class="design" type="text" name="grade_and_section" placeholder="Grade and Section (e.g., 7-A)" required><br><br>
    {{-- END OF ADDED FIELDS --}}

    <button class="bg-success design" type="submit">Save</button>
</form>

</div>

<script type="module" src="{{ asset('js/login.js') }}" defer></script>

@endsection

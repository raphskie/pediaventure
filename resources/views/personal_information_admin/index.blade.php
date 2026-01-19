@extends('layout.administratorlayoutmislan')
@section('administrator_content')

<div class="container index-div">
    <h2>Class List</h2>
    <a href="{{ route('personal-information.create') }}" style="background-color: #a3ffa2; color: #248b28; font-weight: 600; padding: 13px; border-radius: 11px; border: solid 4px #4b9b02; width: 100%; max-width: 300px; margin: 0 auto; display: block; text-decoration: none; text-align: center;">Register New Student</a>

    @if(session('success'))
        <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
    @endif

    {{-- Display Error/Warning if applicable --}}
    @if(session('error'))
        <p style="color: red; font-weight: bold;">{{ session('error') }}</p>
    @endif

    <table class="index-table" border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Age</th>
            <th>Sex</th>
            {{-- ✨ ADDED NEW COLUMNS TO HEADER ✨ --}}
            <th>Address</th>
            <th>Guardian Name</th>
            <th>Grade & Section</th>
            <th>Action</th> {{-- Added header for the Delete button --}}
        </tr>

        @foreach($records as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->lname }}</td>
            <td>{{ $row->fname }}</td>
            <td>{{ $row->mname }}</td>
            <td>{{ $row->age }}</td>
            <td>{{ $row->sex }}</td>

            {{-- ✨ ADDED NEW COLUMN DATA ✨ --}}
            <td>{{ $row->address }}</td>
            <td>{{ $row->guardian_name }}</td>
            <td>{{ $row->grade_and_section }}</td>

            {{-- DELETE FORM (MUST BE INSIDE A <td>) --}}
            <td>
                <form method="POST" action="{{ route('personal-information.destroy', $row->id) }}"
                      onsubmit="return confirm('Are you sure you want to delete {{ $row->lname }}?');">
                    @csrf
                    @method('DELETE') {{-- Spoof the DELETE HTTP method --}}
                    <button class="deletebutton" type="submit" style="color: red; cursor: pointer;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</div>
<div class="button-div">
<br>
<a href="administrator" class="btn exitbutton">exit</a>
</div>

@endsection


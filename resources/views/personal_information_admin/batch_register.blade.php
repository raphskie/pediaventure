@extends('layout.administratorlayoutmislan')
@section('administrator_content')

<div class="container create">
    <h2>Batch Register Student Information</h2>

    @if ($errors->any())
        <div style="background-color: #ffebee; border: 1px solid #ef5350; border-radius: 5px; color: #c62828; padding: 15px; margin-bottom: 20px;">
            <strong>Errors:</strong>
            <ul style="margin: 10px 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div style="background-color: #e8f5e9; border: 1px solid #4caf50; border-radius: 5px; color: #2e7d32; padding: 15px; margin-bottom: 20px;">
            <strong>✅ Success!</strong> {{ session('success') }}
        </div>
    @endif

    <div style="background-color: #e3f2fd; border: 1px solid #2196f3; border-radius: 5px; color: #1565c0; padding: 15px; margin-bottom: 20px;">
        <strong>📋 Instructions:</strong><br>
        Click "Add Student" to add more student forms. Fill all required fields and click "Register All" to save.
    </div>

    <form method="POST" action="{{ route('personal-information.batch-store') }}" id="batch-form">
        @csrf
        <input type="hidden" name="created_by" id="created_by">

        <div id="students-container">
            <!-- Student forms will be added here -->
        </div>

        <div style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;">
            <button type="button" onclick="addStudent()" class="design" style="background-color: #2196f3; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
                ➕ Add Student
            </button>
            <button type="submit" class="design" style="background-color: #4caf50; color: white; padding: 10px 30px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
                ✅ Register All
            </button>
            <a href="{{ route('personal-information.index') }}" class="design" style="background-color: #ff9800; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;">
                ⬅️ Back
            </a>
        </div>
    </form>

    <div class="login-signup-div w-100" style="margin-top: 30px;">
        <button type="button" onclick="history.back()" style="background-color: #a3ffa2; color: #248b28; font-weight: 600; padding: 13px; border-radius: 11px; border: solid 4px #4b9b02; width: 100%; max-width: 300px; margin: 0 auto; display: block;">Back To Previous Page</button>
    </div>
</div>

<style>
    .student-form {
        background-color: #f9f9f9;
        border: 2px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        position: relative;
    }

    .student-form h3 {
        color: #333;
        margin-top: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 2px solid #2196f3;
        padding-bottom: 10px;
    }

    .remove-btn {
        background-color: #f44336;
        color: white;
        border: none;
        padding: 5px 15px;
        border-radius: 3px;
        cursor: pointer;
        font-weight: bold;
    }

    .remove-btn:hover {
        background-color: #d32f2f;
    }

    .student-form input,
    .student-form select,
    .student-form textarea {
        margin-bottom: 10px;
    }
</style>

<script>
    let studentCount = 0;

    function createStudentForm(index) {
        return `
            <div class="student-form" data-student="${index}">
                <h3>
                    Student #${index + 1}
                    ${index > 0 ? `<button type="button" class="remove-btn" onclick="removeStudent(${index})">Remove</button>` : ''}
                </h3>

                <input class="design" type="text" name="students[${index}][lname]" placeholder="Last Name" required><br><br>
                <input class="design" type="text" name="students[${index}][fname]" placeholder="First Name" required><br><br>
                <input class="design" type="text" name="students[${index}][mname]" placeholder="Middle Name"><br><br>
                <input class="design" type="number" name="students[${index}][age]" placeholder="Age" required><br><br>

                <select class="bg-secondary design" name="students[${index}][sex]" required>
                    <option value="">Select Sex</option>
                    <option>Male</option>
                    <option>Female</option>
                </select><br><br>

                <textarea class="design" name="students[${index}][address]" placeholder="Full Address" required></textarea><br><br>
                <input class="design" type="text" name="students[${index}][guardian_name]" placeholder="Guardian Name"><br><br>
                <input class="design" type="text" name="students[${index}][grade_and_section]" placeholder="Grade and Section (e.g., 7-A)" required><br><br>
            </div>
        `;
    }

    function addStudent() {
        const container = document.getElementById('students-container');
        container.insertAdjacentHTML('beforeend', createStudentForm(studentCount));
        studentCount++;
    }

    function removeStudent(index) {
        const element = document.querySelector(`[data-student="${index}"]`);
        if (element) {
            element.remove();
        }
    }

    // Initialize with first student
    document.addEventListener('DOMContentLoaded', function() {
        addStudent();
    });

    // Form validation
    document.getElementById('batch-form').addEventListener('submit', function(e) {
        const forms = document.querySelectorAll('.student-form');
        if (forms.length === 0) {
            e.preventDefault();
            alert('Please add at least one student.');
        }
    });
</script>

<script type="module" src="{{ asset('js/login.js') }}" defer></script>

@endsection

<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class PersonalInformationController extends Controller
{
    public function index()
    {
        $uid = request('uid');
        if ($uid) {
            $records = PersonalInformation::where('created_by', $uid)->get();
        } else {
            $records = PersonalInformation::all();
        }
        return view('personal_information_admin.index', compact('records'));
    }

    public function create()
    {
        return view('personal_information_admin.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'lname' => 'required|string',
            'fname' => 'required|string',
            'mname' => 'required|string',
            'age' => 'required|integer',
            'sex' => 'required|string',
            'address' => 'required|string',
            'guardian_name' => 'nullable|string',
            'grade_and_section' => 'nullable|string',
            'created_by' => 'nullable|string',
        ]);

        PersonalInformation::create($data);

        return redirect()->route('personal-information.index', ['uid' => $data['created_by']]);
    }

    public function destroy($id)
    {
        $record = PersonalInformation::find($id);
        $uid = $record ? $record->created_by : null;
        if ($record) {
            $record->delete();
        } else {
            PersonalInformation::destroy($id);
        }
        if ($uid) {
            return redirect()->route('personal-information.index', ['uid' => $uid]);
        }
        return redirect()->route('personal-information.index');
    }

    public function batchRegisterForm()
    {
        return view('personal_information_admin.batch_register');
    }

    public function batchStore(Request $request)
    {
        $validated = $request->validate([
            'students' => 'required|array|min:1',
            'students.*.lname' => 'required|string',
            'students.*.fname' => 'required|string',
            'students.*.mname' => 'nullable|string',
            'students.*.age' => 'required|integer',
            'students.*.sex' => 'required|string',
            'students.*.address' => 'required|string',
            'students.*.guardian_name' => 'nullable|string',
            'students.*.grade_and_section' => 'required|string',
            'created_by' => 'nullable|string',
        ]);

        $created_by = $request->input('created_by');
        $successCount = 0;

        foreach ($validated['students'] as $studentData) {
            try {
                $studentData['created_by'] = $created_by;
                PersonalInformation::create($studentData);
                $successCount++;
            } catch (\Exception $e) {
                continue;
            }
        }

        return redirect()->route('personal-information.index', ['uid' => $created_by])
            ->with('success', "{$successCount} student(s) registered successfully!");
    }
}

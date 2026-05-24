<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class studentmngtController extends Controller
{
    public function index () {
        $students = Student::all();
        return view ('student.index', compact('students'));
    }

    public function create () {
        return view ('student.create');
    }

    public function store (Request $request) {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required|email|unique:students,email',
            'midname' => 'required',
            'age' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }   

    public function edit ($id) {
        $student = Student::findOrFail($id);
        return view ('student.edit', compact('student'));
    }

    public function update (Request $request, $id) {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required|email|unique:students,email,'.$id,
            'midname' => 'required',
            'age' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy ($id) {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }


}

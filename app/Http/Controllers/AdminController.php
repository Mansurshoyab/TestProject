<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $students = Student::all();
        // dd($students);
        return view('admin.admin')->with(['students' => $students]);
    }

    public function update(Student $student){
        // dd($student);
        $student->update(['status' => 'Active']);
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index(){

        $addresses = Address::all();
        $students = Student::all();
        // dd($students);
        return view('student.student')->with(['addresses' => $addresses, 'students' => $students]);
    }

    public function store(Request $request){
        // dd($request);
        Student::create($request->all());
        return back();
    }

    public function show(){
        $students = Student::all();
        // dd($students);
        return view('student.student')->with(['students' => $students]);
    }
}

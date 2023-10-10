<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SchoolAdminController extends Controller
{
    public function index(){
    return view('school_admin.dashboard');
    }
    public function newstudent()
    {
        return view('school_admin.students.add_student');
    }
    public function show()
    {
        $students=Student::all();
        return view ('school_admin.students.view_students',compact('students'));
    }
}

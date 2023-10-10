<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\User;
use App\Models\Product;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.student_dashboard');
    }
    public function newstudent()
    {
        return view('students.add_student');
    }
    public function show()
    {
        $students=Student::all();
        return view ('students.view_students',compact('students'));
    }
    public function store(Request $request){
        if (Student::where('regno', '=', $request->regno)->exists()) {
         
            Alert::error('Student Exists','The Student with RegNo.'.strtoupper($request->StudentADM).' '.' is Already Registered');
            return redirect()->back();
        }
        $student = new Student($request->all());
        $student->save();
      
        $user = new User();
        $user->email=$request->email;
        $user->role='5';
        $user->password=Hash::make('12345678');
        
        $user->name=$request->name;
        $user->save();
        Alert::success('Student Registration', 'Student Registered Successfully');
        return redirect()->back();

    }
    public function newproduct(){
        $products=Product::all();
        return view('student.products',compact('products')); 
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Hash;
use App\Models\BusinessOwner;
use App\Models\Student;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        $count_bsownwers=BusinessOwner::count();
        $count_students=Student::count();
        $count_admins=User::select('*')->where('role','3')->count();
        $count_products=Product::count();
        return view ('admin.admin_dashboard',compact('count_bsownwers','count_students','count_admins','count_products'));
    }
    public function show()
    {
        $schooladmins=User::select('*')->where('role', '3')->get();
        return view('admin.school_admin.schooladmin',compact('schooladmins'));
    }
    public function store(Request $request)
    {
     
      $user = new User();
      $user->email=$request->email;
      $user->password=Hash::make($request->password);    
      $user->role=$request->role;   
      $user->name=$request->name;
      $user->save();
      Alert::success('Shool Admin Registration', 'Admin Added Successfully');
      return redirect()->back();
    }
    
}

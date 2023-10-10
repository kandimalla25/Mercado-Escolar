<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\BusinessOwner;
class BusinessOwnerController extends Controller
{
    public function index()
    {
        return view('businessowner.business_owner');
    }
    public function store(Request $request)
    {
        if (BusinessOwner::where('email', '=', $request->email)->exists()) {
         
            Alert::error('Already A businessowner','The businessowner with Email.'.strtoupper($request->emaill).' '.' is Already Registered');
            return redirect()->back();
        }
        $businessowner = new BusinessOwner($request->all());
        $businessowner->save();
      
        $user = new User();
        $user->email=$request->email;
        $user->password=Hash::make('12345678');    
        $user->role='4';    
        $user->name=$request->name;
        $user->save();

        Alert::success('Businessowner Registration', 'businessowner Added Successfully');
        return redirect()->back();

    }
    public function show(){
        $businessowners=BusinessOwner::all();
        return view('admin.businessowner',compact('businessowners'));
    }

    public function shows(){
        $businessowners=BusinessOwner::all();
        return view('school_admin.business_owner',compact('businessowners'));
    }
}

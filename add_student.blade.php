@extends('layouts.admin')
@section('content')
@include('sweetalert::alert')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Add Student</h1>
    </div>
    <form class="user" method="post" action="{{route('post_student')}}">
        @csrf
        <div class="form-group row">
            <div class="col-sm-6">
                <input type="text" name="regno" class="form-control form-control-user" 
                    placeholder="Reg Number" required>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" name="name" class="form-control form-control-user" 
                    placeholder="Full Name" required>
            </div>
           
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
            <input type="email" name="email" class="form-control form-control-user"
                placeholder="Email Address" required>
            </div>
             <div class="col-sm-6">
                    <input type="text" name="phone" class="form-control form-control-user" 
                        placeholder="Phone Number" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" name="address" class="form-control form-control-user"
                    placeholder="Address" required>
            </div>
            <div class="col-sm-6">
                <input type="text" name="age" class="form-control form-control-user"
                     placeholder="Age" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <select name="gender" required class="form-control " >
                    <option value="" selected disabled>Select Your Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
            </select>
            </div>
           
        </div>
       <button class="btn btn-primary btn-user btn-block" type="submit"> Register Student</button>
       
        <hr>      
    </form>
    <hr>
   
</div>
@endsection
@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Students</h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Students</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Reg No</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Reg No</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Age</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($students ?? '' as $student)
                        <tr>
                          <td>{{$student->regno}}</td>
                          <td>{{$student->name}}</td>
                          
                          <td>{{$student->phone}}</td>
                          <td>{{$student->email}}</td>
                          <td>{{$student->address}}</td>
                          <td>{{$student->gender}}</td>
                          <td>{{$student->age}}</td>                   
                          <td>
                            <a href="" title="View Details"><span class="right badge badge-info"><i class="fa fa-eye"></i></span></a>
                           
                          </td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
@extends('layouts.admin')
@section('content')
@include('sweetalert::alert')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Business Owners</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Business Owners</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
    <div class="row ">
        <div class="col-md-1"></div>
          
        <div class="col-md-10">
        

            <div class="card bg-light text-dark mt-2 ">
                <div class="card-header bg-light">
                    <h2 class="text-primary">Business Owners </h2>
                </div>

                <div class="card-body">
                    <p>Business Owners Information</p>
                        <hr> 
                                          
                    <form method="post" action="{{route('post_businessowner')}}">
                        @csrf                                  
                        <div class="form-group row">
                            
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">        
                                <label>Business Name</label>
                                <input type="text" name="businessName" class="form-control" required >
                             
                                                              
                               
                            </div>  
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">
                                <label>First Name</label>
                                <input type="text" name="name" class="form-control" id="fName"   required>
                                
                            </div>
                          
                           
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">        
                                <label>Phone Number</label>
                                <input type="number" name="phone"   class="form-control" required >
                             
                                                              
                               
                            </div>  
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control"    required>
                                
                            </div>
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control"    required>
                                
                            </div>
                           
                        </div>
                        <div class="form-group row">
                            
                            
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">
                                <label>Age</label>
                                <input type="number" name="age" class="form-control"    required>
                                
                            </div>
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">
                                <label>City</label>
                                <input type="text" name="city" class="form-control"    required>
                                
                            </div>
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">
                                <label for="571290b31b0a8d"><span class="required">
                                    Gender                           
                                            <select name="gender" required class="form-control" id="">
                                                <option value="" selected disabled>Select Your Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                        </select>
                                
                                
                            </div>
                        </div>
                                               
                        
                </div>


                <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
      </div><!-- /.container-fluid -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                   
                    <th>Full Name</th>
                    
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Business Name</th>
                    <th>Address</th>
                    <th>Gender</th>  
                    <th>Age</th> 
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($businessowners ?? '' as $bs)
                  <tr>
                   
                    <td>{{$bs->name}}</td>
                    
                    <td>{{$bs->phone}}</td>
                    <td>{{$bs->email}}</td>
                    <td>{{$bs->city}}</td>
                    <td>{{$bs->businessName}}</td>
                    <td>{{$bs->address}}</td>
                    <td>{{$bs->gender}}</td>
                    <td>{{$bs->age}}</td>                   
                    <td>
                      <a href="" title="View Details"><span class="right badge badge-info"><i class="fa fa-eye"></i></span></a>
                     
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    <tr>
                   
                        <th>Full Name</th>
                       
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Business Name</th>
                        <th>Address</th>
                        <th>Gender</th>  
                        <th>Age</th> 
                        <th>Actions</th>
                      </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>               

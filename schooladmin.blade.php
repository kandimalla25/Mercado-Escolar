@extends('layouts.admin')
@section('content')
@include('sweetalert::alert')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
    <div class="row ">
        <div class="col-md-1"></div>
          
        <div class="col-md-10">
        

            <div class="card bg-light text-dark mt-2 ">
                <div class="card-header bg-light">
                    <h2 class="text-primary">Add School Admin </h2>
                </div>

                <div class="card-body">
                     
                                          
                    <form method="post" action="{{route('post_schooladmin')}}">
                        @csrf                                  
                        <div class="form-group row">
                            
                            <div class="col-sm-6 form-floating mb-3 mt-3 mb-sm-0">        
                                <label>Admin Name</label>
                                <input type="text" name="name" class="form-control" required >                                                                                        
                               
                            </div>                              
                            
                           
                            <div class="col-sm-6 form-floating mb-3 mt-3 mb-sm-0">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control"    required>
                                
                            </div>
                           
                           
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 form-floating mb-3 mt-3 mb-sm-0">
                                <label for="571290b31b0a8d"><span class="required">
                                    Role                           
                                            <select name="role" required class="form-control" id="">
                                                <option value="" selected disabled>Select Role</option>
                                                <option value="3">School Admin</option>                                                
                                                <option value="Other">Other</option>
                                        </select>
                                
                                
                            </div>
                            
                            <div class="col-sm-6 form-floating mb-3 mt-3 mb-sm-0">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control"    required>
                                
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
                    <th>Email</th>                  
                  
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($schooladmins ?? '' as $sa)
                  <tr>
                    <td>{{$sa->name}}</td>
                    <td>{{$sa->email}}</td>
                    
                                  
                    <td>
                      <a href="" title="View Details"><span class="right badge badge-info"><i class="fa fa-eye"></i></span></a>
                     
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    <tr>
                    
                        <th>Full Name</th>                 
                        <th>Email</th>                    
                       
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

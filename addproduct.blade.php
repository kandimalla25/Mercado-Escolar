@extends('student.student_dashboard')
@section('dashboard')
@include('sweetalert::alert')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">eProduct</li>
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
                    <h2 class="text-primary">Products </h2>
                </div>

                <div class="card-body">
                    <p>Product Information</p>
                        <hr> 
                                          
                    <form method="post" action="{{route('post_product')}}">
                        @csrf                                  
                        <div class="form-group row">
                            
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">        
                                <label>Product Name</label>
                                <input type="text" name="Name" class="form-control" required >
                             
                                                              
                               
                            </div>  
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">
                                <label>Quantity</label>
                                <input type="number" name="Quantity" class="form-control" id="fName"   required>
                                
                            </div>
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">
                                <label>Price</label>
                                <input type="number" name="Price" class="form-control" id="lName"   required>
                                
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
                   
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Created By</th>                    
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($products ?? '' as $bs)
                  <tr>
                   
                    <td>{{$bs->id}}</td>
                    <td>{{$bs->Name}}</td>
                    <td>{{$bs->Quantity}}</td>
                    <td>{{$bs->Price}}</td>
                    <td>{{$bs->CreatedBy}}</td>                                   
                    <td>
                      <a href="" title="View Details"><span class="right badge badge-info"><i class="fa fa-eye"></i></span></a>
                     
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    <tr>
                   
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Created By</th>                    
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

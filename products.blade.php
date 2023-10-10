@extends('student.student_dashboard')
@section('content')
@include('sweetalert::alert')
 <div class="content-wrapper">
   

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
                                          
                    <form method="post" action="{{route('post_product')}}" enctype="multipart/form-data">
                        @csrf                                  
                        <div class="form-group row">
                            
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">        
                                <label>Product Name</label>
                                <input type="text" name="name" class="form-control" required >
                             
                                                              
                               
                            </div>  
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">
                                <label>Quantity</label>
                                <input type="number" name="quantity" class="form-control"  required>
                                
                            </div>
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">
                                <label>Price</label>
                                <input type="number" name="price" class="form-control"  required>
                                
                            </div>
                            <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">
                              <label>Picture</label>
                              <input type="file" name="image" class="form-control"  required>
                              
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
                    <td>{{$bs->name}}</td>
                    <td>{{$bs->quantity}}</td>
                    <td>{{$bs->price}}</td>
                    <td>{{$bs->user}}</td>                                   
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
 
@endsection

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>               

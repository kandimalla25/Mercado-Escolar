@extends('student.student_dashboard')
@section('content')
@include('sweetalert::alert')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">POSTS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">POSTS</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row ">
            <div class="col-md-1"></div>
              
            <div class="col-md-10">
            
    
                <div class="card bg-light text-dark mt-2 ">
                    <div class="card-header bg-light">
                        <h2 class="text-primary">Posts </h2>
                    </div>
    
                    <div class="card-body">
                        <p>Post Information</p>
                            <hr> 
                                              
                        <form method="post" action="{{route('post_posts')}}">
                            @csrf                                  
                            <div class="form-group row">
                                
                                <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">        
                                    <label>Post Title</label>
                                    <input type="text" name="Title" class="form-control" required >
                                 
                                                                  
                                   
                                </div>  
                                <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">
                                    <label>Subject</label>
                                    <input type="text" name="Subject" class="form-control"  required>
                                    
                                </div>
                                <div class="col-sm-4 form-floating mb-3 mt-3 mb-sm-0">
                                    <label>Message</label>
                                    <input type="text" name="Message" class="form-control" required>
                                    
                                </div>
                               
                            </div>
                                                                        
                            
                    </div>
    
    
                    <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
      <div class="container-fluid">
<div class="class row">
        @foreach ($posts ?? '' as $bs)
        <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h6>{{$bs->Title}}</h6>

                <p>Subject: {{$bs->subject}}</p>
              </div>
              <div class="icon">
                <i class=""></i>
              </div>
             <h4>{{$bs->Message}}</h4>
             <p >Posted by: {{$bs->CreatedBy}}</p>
            </div>
          
          </div>
   @endforeach
</div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>               

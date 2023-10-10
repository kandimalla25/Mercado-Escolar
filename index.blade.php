@extends('student.student_dashboard')
@section('content')
@include('sweetalert::alert')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container">

            <div class="row ">
                <div class="col-md-1"></div>

                <div class="col-md-10">


                    <div class="card bg-light text-dark mt-2 ">
                        <div class="card-header bg-light">
                            <h2 class="text-primary">Messages</h2>
                        </div>

                    </div>
                </div>
                <div class="col-md-1"></div>
            </div><!-- /.container-fluid -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Select user to chat with</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <form id="chatting">
                                        <div class="wrappers">
                                            <div class="users">
                                                @foreach ( $users as $user )
                                                <a href="{{route('message.index',$user->id)}}" class="btn " id="start">
                                                    <div class="chat-user">
                                                        <div class="profile" id="friend_{{$user->id}}">
                                                            <img src="{{asset('assets/img/about/1.jpg')}}">
                                                            @if($user->is_online == 1)
                                                            <div class="isonline"></div>
                                                            @else
                                                            <div class="isoffline"></div>
                                                            @endif
                                                        </div>
                                                        <div class="title">
                                                            <h5>{{$user->name}}</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                                @endforeach
                                            </div>


                                            <div class="chats">
                                                <div class="mess">
                                                    @foreach ($chats as $chat)
                                                    @if ($chat->user_id == auth()->user()->id)
                                                    <div class="mess">
                                                        <h5>{{$chat->message}}</h5>

                                                    </div>
                                                    @endif


                                                    @endforeach

                                                </div>
                                                <div class="chat-box">
                                                    <div class="input-group mb-3 ">
                                                        <input type="text" id="chat_message" class="form-control"
                                                            placeholder="Recipient's username"
                                                            aria-label="Recipient's username"
                                                            aria-describbutton-addon2edby="button-addon2">
                                                        <button class="btn btn-outline-secondary" type="submit"
                                                            id="">Send</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>




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

@section('scripts')
<script>
    $(function(){



    let user_id = {{Auth::id()}};
    let friend = {{($friend)?$friend->id :""}};
   // alert(friend);
   // console.log(user_id);

    let socket = io("http://localhost:3000",{
        query:{user_id:user_id}

        });



        $("#chatting").on("submit",function(e){
            e.preventDefault();
            let chat_message = $("#chat_message").val();
            if(chat_message.trim().length == 0){
                $("#chat_message").focus();
            }else{
                var data = {
                    user_id:user_id,
                    friend: friend,
                    chat_message:chat_message,
                }
                socket.emit('send_message',data);
                $("#chat_message").val('');
            }
        });

        socket.on('user_connected',function(data){
        $("#friend_"+data).html('<div class="isonline"></div>')
    });

    socket.on('user_disconnected',function(data){
        $("#friend_"+data).html('<div class="isoffline"></div>')
    });

    socket.on('recieve_message',function(data){
        if((data.user_id == user_id && data.friend==data.friend) && (data.user_id == friend &&
        data.friend ==user_id)){
            if(data.user_id == user_id){
                let html = `<div class="mess">
                <h5>${data.chat_message}</h5>
            </div>`
            }else{
                let html = `<div class="mess">
                <h5>${data.chat_message}</h5>
            </div>`

            }
        }
    });
   });
</script>

@endsection
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

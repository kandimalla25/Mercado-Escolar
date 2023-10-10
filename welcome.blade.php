@extends('layouts.app')
@section('content')
<section>
    <div class="homediv">
        <div style="margin-top: 80px;"></div>
        <div class="leftcol">

<form>
    <input type="text" name="search" placeholder="I'm looking for..">
</form>
</div>

<div class="rightcol">
    <b>
        <h1>Welcome to Mercado Escolar</h1>
    </b>
    <br />
    <br />
    <p class="sectionSubTag text-small">

        One stop for all your student need
    </p>
    <br />
    <br />
    <div>
        @if(!Auth::User()== null)
        <button class="button" ><a style="color:white;" href="{{url('/shop')}}">Shop NOW</a> </button>
        @else
        <button class="button" ><a style="color:white;" href="{{url('register')}}">Join NOW</a> </button>
        @endif
    </div>
</div>
</div>


</section>
@endsection
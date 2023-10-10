@extends('layouts.app')
@section('content')
<section class="">
    <center><h1>CONTACT US</h1></center>  
<div class="contact">

<form >
    <label for="msg">Message</label>
  <textarea id="message" name="message " placeholder="Type in Your Query" style="height:100px"></textarea>
  <label for="fname">First Name</label>
  <input type="text" id="fname" name="firstname" placeholder="First Name">       

  <input type="text" id="lame" name="lastname" placeholder=" Last Name">   
  <label for="phn">Phone Number</label>
  <input type="text" name="phone" placeholder="Phone">
  <label for="email">Email</label>      
  <input type="text"  name="email" placeholder=" Email">
  

  <input type="submit" value="Submit">
</form>
</div>

</section>
@endsection
@extends('LoginLayout')
@section('content')
<div class="box register"> 
  <div class="form">
    <h2>Register </h2>
    <form action={{ URL::to('RegisterAccount')}} method="post">
      @csrf
      <div class="inputbox">
        <input type="text" name="username" autocomplete="off" required>
        <span>Username </span>
        <i></i>
      </div>
      <div class="inputbox">
        <input type="text" name="email" autocomplete="off" required>
        <span>Email </span>
        <i></i>
      </div>
      <div class="inputbox">
        <input type="password" name="password" autocomplete="off" required>
        <span>Password</span>
        <i></i>
      </div>
      <div class="inputbox">
        <input type="password" name="password" autocomplete="off" required>
        <span>Conform Password</span>
        <i></i>
      </div>
      <div class="links">
        <a href="{{ asset("repass") }}"> Forgot Password</a>
        <a href="{{ asset("login") }}">Sign In</a>
      </div>
      <input type="submit" value="Register">
    </form>
  </div>
</div>
@endsection
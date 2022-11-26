@extends('LoginLayout')
@section('content')
<div class="box repass"> 
  <div class="form">
    <h2>Reset</h2>
    <form action={{ URL::to('RepassPost')}} method="post">
      @csrf
      <div class="inputbox">
        <input type="hidden" name="token" value="{{ $token }}" required>
        <input type="password" name="password" autocomplete="off" required>
        <span>Password</span>
        <i></i>
      </div>
      <div class="inputbox">
        <input type="password" name="confirm_password" autocomplete="off" required>
        <span>Confirm Password</span>
        <i></i>
      </div>
      <div class="links">
        <a href="{{ asset("login")}}">Sign in ||&nbsp;&nbsp;</a>
        <a href="{{ asset("register") }}">Sign up</a>
      </div>
      <input type="submit" value="Reset">
    </form>
  </div>
</div>
@error('password')
<div class="alert alert-danger"><?php  echo $message ?></div>
@enderror
@endsection
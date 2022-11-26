@extends('LoginLayout')
@section('content')
<div class="box repass"> 
  <div class="form">
    <h2>Forgot Password</h2>
    <form action={{ URL::to('ForogtPassPost')}} method="post">
      @csrf
      <div class="inputbox">
        <input type="text" name="email" autocomplete="email" required>
        <span>Email</span>
        <i></i>
      </div>
      <div class="links">
        <a href="{{ asset("login")}}">Sign in ||&nbsp;&nbsp;</a>
        <a href="{{ asset("register") }}">Sign up</a>
      </div>
      <input type="submit" value="Forgot Password">
    </form>
  </div>
</div>
<div>
  @if (session('notify'))
    <div class="alert alert-danger">
        <div> - {{ session('notify') }}</div>
    </div>
  @endif
</div>
@endsection
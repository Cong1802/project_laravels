@extends('LoginLayout')
@section('content')
<div class="box"> 
  <div class="form">
    <h2>Sign in </h2>
    @if (count($errors) >0)
    <ul class="mt-3">
        @foreach($errors->all() as $error)
            <li class="text-danger">{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    @if (session('status'))
        <ul>
            <li class="text-danger"> {{ session('status') }}</li>
        </ul>
    @endif
    <form action={{ URL::to('LoginUser')}} method="post">
      @csrf
      <div class="inputbox">
        <input type="text" name="email" autocomplete="email" required>
        <span>Email</span>
        <i></i>
      </div>
      <div class="inputbox">
        <input type="password" name="password" autocomplete="off" required>
        <span>Password</span>
        <i></i>
      </div>
      <div class="links">
        <a href="{{ asset("repass") }}"> Forgot Password</a>
        <a href="{{ asset("register") }}">Sign up</a>
      </div>
      <input type="submit" value="Login">
    </form>
  </div>
</div>
@endsection
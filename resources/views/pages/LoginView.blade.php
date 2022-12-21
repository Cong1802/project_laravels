@extends('LoginLayout')
@section('content')
<body class="hold-transition login-page">
  <div class="login-container">
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
        <a href="{{ asset("ForogtPassword") }}"> Forgot Password</a>
        <a href="{{ asset("register") }}">Sign up</a>
      </div>
      <input type="submit" value="Login">
    </form>
  </div>
</div>
</div>
</body>
@if ($errors->any())
<div class="alert alert-danger">
  @foreach ($errors->all() as $error)
      <div><?php echo $error ?></div>
  @endforeach
</div>
@endif
@if (session('notify'))
<div class="alert alert-danger">
      <div> <?php echo session('notify') ?></div>
</div>
@endif
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href= {{ asset ("public/admin/plugins/fontawesome-free/css/all.min.css")}}>
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href= {{ asset ("public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}>
  <!-- Theme style -->
  <link rel="stylesheet" href= {{ asset ("public/admin/dist/css/login.css")}}>
</head>
<style>
  canvas
  {
    top: 0px;
    width: 1460px;
    height: 1118px;
    position: absolute;
  }
</style>

<body id="app" class="hold-transition login-page">
<button onclick="location.href='{{ URL::to ('/')}}'" type="button" id="backhome"><ion-icon name="arrow-back"></ion-icon></ion-icon></button>
<div class="box"> 
  <div class="form">
    <h2>Sign in </h2>
    <form action={{ URL::to('admin/LoginAdmin')}} method="post">
      @csrf
      <div class="inputbox">
        <input type="text" name="email" autocomplete="email" required>
        <span>Username </span>
        <i></i>
      </div>
      <div class="inputbox">
        <input type="password" name="password" autocomplete="off" required>
        <span>Password</span>
        <i></i>
      </div>
      <div class="links">
        <a href="{{ asset("admin/repass") }}"> Forgot Password</a>
        <a href="{{ asset("admin/register") }}">Signup</a>
      </div>
      <input type="submit" value="Login">
    </form>
  </div>
</div>

<!-- jQuery -->
<script src={{ asset ("public/admin/plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap 4 -->
<script src={{ asset ("public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<script type="module" src="{{ asset("public/frontend/home/js/particle.js") }}"></script>
<!-- AdminLTE App -->
<script src={{ asset ("public/admin/dist/js/adminlte.min.js")}}></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>


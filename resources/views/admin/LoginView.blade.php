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
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <div class="login-box">
        <h2>Login</h2>
        @if (count($errors) >0)
        <ul>
            @foreach($errors->all() as $error)
                <li class="text-danger"> {{ $error }}</li>
            @endforeach
        </ul>
        @endif

        @if (session('status'))
            <ul>
                <li class="text-danger"> {{ session('status') }}</li>
            </ul>
        @endif
        <form action={{ URL::to('admin/LoginAdmin')}} method="post">
          @csrf
          <div class="user-box">
            <input type="text" name="email" autocomplete="email" required>
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" autocomplete="off" required>
            <label>Password</label>
          </div>
          <div class="d-flex">
            <small>Forgot password?</small>&nbsp;&nbsp;
            <small href="#">Register</small>
          </div>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button type="submit">Submit</button>
          </a>

        </form>
      </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<button onclick="location.href='{{ URL::to ('/')}}'" type="button" id="backhome"><ion-icon name="arrow-back"></ion-icon></ion-icon></button>
<!-- jQuery -->
<script src={{ asset ("public/admin/plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap 4 -->
<script src={{ asset ("public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{ asset ("public/admin/dist/js/adminlte.min.js")}}></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>


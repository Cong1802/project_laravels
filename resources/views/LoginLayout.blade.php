<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Log in</title>
<link rel="stylesheet" href={{ asset('public/backend/dist/css/login.css')}}>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="hold-transition login-page">
  <div class="login-container">
    <form action={{ URL::to('LoginUser')}} method="post">
      @csrf
      <ul class="login-nav">
        <li class="login-nav__item active">
          <h2 class="text-white" >Sign In</h2>
        </li>
      </ul>
      @if ($errors->any())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <div><?php echo $error ?></div>
        @endforeach
      </div>
      @endif
      @if (session('notify'))
      <div class="alert alert-danger">
            <div class="text-danger mb-2"> <?php echo session('notify') ?></div>
      </div>
      @endif
      <label for="login-input-user" class="login__label">
        Username
      </label>
      <input id="login-input-user" name="email" class="login__input" type="text" />
      <label for="login-input-password" class="login__label">
        Password
      </label>
      <input id="login-input-password" name="password" class="login__input" type="password" />
      <button class="login__submit" type="submit">Sign in</button>
    </form>
    <a href="#" class="login__forgot">Forgot Password?</a>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>



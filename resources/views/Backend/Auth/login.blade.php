<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Penjualan Spare Part Mobil | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset ('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset ('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset ('adminlte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="adminlte/index2.html"><b>Login</b>User</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      @if(session('message'))<div class="alert alert-warning">{{ session('message') }}</div>@endif
      <form method="post" action="{{ action("App\Http\Controllers\Backend\AuthController@postLogin") }}">
        {!! csrf_field() !!}
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     

     
      <p class="mb-0">
        <a href="register" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset ('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset ('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('adminlte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>

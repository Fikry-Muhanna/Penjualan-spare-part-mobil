
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('page_name') </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset ('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset ('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset ('adminlte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{asset ('adminlte/index3.html')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('layouts.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <div class="container-fluid">
        @yield('content')
        
        </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset ('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset ('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset ('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('adminlte/dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset ('adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset ('adminlte/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset ('adminlte/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset ('adminlte/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset ('adminlte/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset ('adminlte/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset ('adminlte/dist/js/pages/dashboard2.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 |</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/summernote/summernote-bs4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/contact" class="nav-link">Contact</a>
      </li>
      <li class="nav-item  d-sm-inline-block">
        <a href="{{ route('logout') }}" class="nav-link">Logout</a>
      </li>
    </li>
    </ul>
    
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="nav-link brand-link >
      <img src="{{asset('adminLTE')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('adminLTE')}}/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/contact" class="d-block">Fadilah Amri</a>
        </div>
      </div>
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           <li class="nav-item menu-is-opening menu-open"> 
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                  Tables
                  <i class="fas fa-angle-left right"></i>
              </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="/tables" class="nav-link "> 
              <i class="far fa-circle nav-icon"></i>
              <p>Table</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/data-tables" class="nav-link" >
              <i class="far fa-circle nav-icon"></i>
              <p>Data Tables</p>
            </a>
          </li>
        </ul>
          <li class="nav-header">QUERY BUILDER</li>
          <li class="nav-item">
            <a href="/cast" class="nav-link" >
              <i class="far fa-circle nav-icon"></i>
              <p>Cast</p>
            </a>
          </li>
      </li>
    </div>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
    
      @yield('container')
    
    </section>
  </div>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2023 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="{{asset('adminLTE')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="https://kit.fontawesome.com/e943d7506e.js" crossorigin="anonymous"></script>
<script src="{{asset('adminLTE')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/chart.js/Chart.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/sparklines/sparkline.js"></script>
<script src="{{asset('adminLTE')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="{{asset('adminLTE')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{asset('adminLTE')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{asset('adminLTE')}}/dist/js/adminlte.js"></script>
<script src="{{asset('adminLTE')}}/dist/js/pages/dashboard.js"></script>
@stack('scripts')
</body>
</html>

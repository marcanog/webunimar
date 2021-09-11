<!DOCTYPE html>
<!--
<!-- <html lang="es"> -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Administrador</title> 
  @include('admin.css')
 
  <!-- REQUIRED SCRIPTS -->
  @include('admin.scripts')

 

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-blue-u navbar-light justify-content-between">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: #ffffff"></i></a>
      </li>
    </ul> 
    <ul class="navbar-nav">
      <div class="user-panel my-2 my-lg-0 d-inline-flex">
        <div class="image">
          <img src="{{asset('image/user.png')}}" class="img-circle elevation-2" alt="Usuario">
        </div>
        @if (Route::has('login'))
        <div class="info">
          @if (auth()->user()->role === "Administrador")
              <div class="nav-item dropdown show">
                <a href="#" class="d-block btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ auth()->user()->name }}
                </a> 
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Cerrar Sesión</a>
                </div>
              </div>
              <!-- Crear función en js para  llamar modal para cerrar la sesión -->
           @else
              <a href="{{ route('login') }}">{{trans('header.login')}}</a>
              <!--Crear redirección-->
          @endif
        </div>
        @endif
      </div>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include ('admin.mainsidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
     <div class="p-4">
      @if (Route::has('login'))
          <div class="top-right links">
              @auth
                  @yield('admincontent')
              @else
                  <a href="{{ route('login') }}">{{trans('header.login')}}</a>  
                  <!-- Debe aparecer un mensaje -->
              @endauth
          </div>
      @endif
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('admin.footer')
</div>
<!-- ./wrapper -->


</body>
</html>
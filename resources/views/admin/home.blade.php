<!DOCTYPE html>
<!-- <html lang="es"> -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Administrador</title>
    <!-- REQUIRED STYLESHEETS -->
@include('admin.css')
<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- REQUIRED SCRIPTS -->
    @include('admin.scripts')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-blue-u justify-content-between">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars" style="color: #ffffff"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <div class="user-panel d-inline-flex align-items-center">
                <div class="image">
                    <img src="{{asset('image/user.png')}}" class="img-circle elevation-2" alt="Usuario">
                </div>
                <div class="info">
                    @if (auth::guest())
                        <a href="{{ route('login') }}">{{trans('header.login')}}</a>
                        <!--Crear redirección-->
                    @else
                        {{ auth()->user()->name }}
                        <!-- Crear función en js para  llamar modal para cerrar la sesión -->
                    @endif
                </div>
            </div>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include ('admin.mainsidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="p-4">
            <div class="top-right links">
            @auth
                @yield('admincontent')
            @else
                <a href="{{ route('login') }}">{{trans('header.login')}}</a>
                    <!-- Debe aparecer un mensaje -->
                @endauth
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('admin.footer')
</div>
<!-- ./wrapper -->
</body>
</html>

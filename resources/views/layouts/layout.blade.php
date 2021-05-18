<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="shortcut icon" href="{{{ asset('image/unimar.ico') }}}">
    
    <title>{{trans('home.title')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Arial:wght@200;600&display=swap" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <style>
        .top-right {
            display: flex;
            flex-wrap: nowrap;
            justify-content: flex-start;
            position: absolute;
            right: 10px;
            top: 18px;
            width: 10%;
        }
        
        .links > a {
            color: #212121;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 500;
            text-decoration: none;
            text-transform: uppercase;
        }

        .top-left {
            display: flex;
            flex-wrap: nowrap;
            justify-content: flex-start;
            height: 50px;
            margin: 0 auto;
            box-shadow: 0px 1px 3px #c1c1c1;
        } 
        .flex-container {
            display: flex;
            margin: 1em auto;
            position: sticky;
            background-color: #ffffff;
        }
</style>

</head>
    <body>         
        
       <!-- <div class="flex-center position-ref full-height">-->
        <div class="flex-content position-ref full-height">
            <div class="nav-rrss">
                <div class="top-left links">
                    <div class="flex-row">
                        <div class="flex nav-bar">
                                <div class="rss-bar">
                                    <ul>
                                        <a href="#"><img class="img-rrss" src="./image/rrss/email.png"></a>
                                        <a href="#"><img class="img-rrss" src="./image/rrss/instagram.png"></a>
                                        <a href="#"><img class="img-rrss" src="./image/rrss/facebook.png"></a>
                                        <a href="#"><img class="img-rrss" src="./image/rrss/gorjeo.png"></a>
                                        <a href="#"><img class="img-rrss" src="./image/rrss/linkedin.png"></a>
                                    </ul>
                                </div>
                                <nav class="navbar navbar-light bg-light search-bar">
                                    <form class="form-inline">
                                        <input class="search" type="text" placeholder="Search" arial-label="search"><img class="search-img btn" src="{{ URL::asset('./image/lupa_b.png')}}" href="#">
                                    </form>
                                </nav>
                                <div class="navbar language-icon">
                                    <div class="nav-item dropdown show" id="languages">
                                        <li class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="./image/idioma.png" style="width:32px;">
                                        </li>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                        </div><!--When there is no desire, all things are at peace. - Laozi --> 
                    </div>   
                    
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Inicio</a>
                            @else
                                <a href="{{ route('login') }}"><img src="{{URL::asset('./image/login.png')}}" style="width: 25px;">Login</a>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
            <div class="flex-container">
                        <div class="flex logo">
                                        <a href="#"><img class="img-logo" src="{{URL::asset ('./image/unimar.jpg') }}"></a>
                        </div>
                        <div class="flex-bar">
                            <nav class="navbar navbar-light">
                                <!-- Navbar content -->
                                <a class="navbar-brand" id="header-menu" href="#">Nuestra Institución</a>
                                <a class="navbar-brand" id="header-menu" href="#">Organización</a>
                                <a class="navbar-brand" id="header-menu" href="#">Decanatos</a>
                                <a class="navbar-brand" id="header-menu" href="#">Extensión</a>
                                <a class="navbar-brand" id="header-menu" href="#">Investigación</a>
                                    <!-- </nav>
                                    <nav class="navbar navbar-light">
                                    Navbar content -->
                                <a class="navbar-brand" id="header-menu" href="#">Nuevos Ingresos</a>
                                <a class="navbar-brand" id="header-menu" href="#">Estudiantes Regulares</a>
                                <a class="navbar-brand" id="header-menu" href="#">Egresados</a>
                                <a class="navbar-brand" id="header-menu" href="#">Profesores</a>
                                <a class="navbar-brand" id="header-menu" href="#">Internacional</a>
                                <a class="navbar-brand" id="header-menu" href="#">Servicios</a>
                            </nav>
                        </div>
                    </div>
        </div>
            <main class="py-4">
                @yield('content')
            </main>

    <div class="footer">
        <div class="info-university">
            <img src={{("./image/logo-blanco.png")}}>
            <span>Av. Concepción Mariño, Sector El Toporo, El Valle del Espíritu Santo, Edo. Nueva Esparta, Venezuela.</span>
        </div>
        <div class="our-institution">
            <a href="#"><b>Nuestra Institución</b></a>
            <a href="#">Rectorado</a>
            <a href="#">Vicerrectorado Académico</a>
            <a href="#">Decanatos</a>
            <a href="#">Bienestar Estudiantil</a>
        </div>
        <div class="offers">
            <a href="#"><b>Ofertas de Estudios</b></a>
            <a href="#">Pregrado</a>
            <a href="#">Postgrado</a>
            <a href="#">Diplomados</a>
            <a href="#">Cursos y Talleres</a>
        </div>
        <div class="webs-service">
            <a href="#"><b>Servicios Web</b></a>
            <a href="#">Pagos Online</a>
            <a href="#">Recibos de Pago</a>
            <a href="#">Educación Virtual</a>
            <a href="#">Horarios Académcos</a>
        </div>
        <div class="quickly-access">
            <a href="#"><b>Acceso Rápido</b></a>
            <a href="#">Calendario Académico</a>
            <a href="#">Directorio Telefónico</a>
            <a href="#">Contáctanos a tráves de</a>
            <div class="rrss">
                <a href="#"><img src={{('./image/rrss/email.png')}}></a>
                <a href="#"><img src={{('./image/rrss/facebook.png')}}></a>
                <a href="#"><img src={{('./image/rrss/gorjeo.png')}}></a>
                <a href="#"><img src={{('./image/rrss/instagram.png')}}></a>
                <a href="#"><img src={{('./image/rrss/linkedin.png')}}></a>
            </div>
        </div>
    </div>
    <div class="copyright-content">
            <span>© Copyright 2001-2021 Universidad de Margarita, Rif: J-30660040-0. Teléfono: 800-UNIMAR (800-864627). Isla de Margarita - Venezuela.</span>
    </div>
</body>
</html>
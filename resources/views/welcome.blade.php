<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('./css/app.css') }}">
        <script src="{{ URL::asset('./js/script.js') }}"></script> 
        <link rel="shortcut icon" href="{{{ asset('image/unimar.ico') }}}">
        
        <title>{{trans('home.title')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Arial:wght@200;600&display=swap" rel="stylesheet">

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
    </style>

    </head>
    <body>         
        
       <!-- <div class="flex-center position-ref full-height">-->
        <div class="flex-content position-ref full-height">
            <div class="top-left links">
                @include('components.menu_rrsslayout')
            </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}"><img src="{{URL::asset('./image/login.png')}}" style="width: 25px;">Login</a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registro</a>
                           <span class="openmodal btn" href="{{ route('register') }}" data-toggle="modal" data-target="#modal-register" style="font-size: 12px; text-transform: uppercase;"> Registro </span>
                          
                        @endif-->
                    @endauth
                </div>
            @endif
            @include('components.menu')
       <!-- @show -->
            <div class="content">
            
                @include('components.slider')
                <div  class="section-content">
                    <div class="container-sm">
                        <img id="img-section" src="{{URL::asset('./image/megafono.png')}}"><span>Novedades/Noticias</span>
                    </div>
                </div>
                <!-- @yield('content') esta opción debería mostrar la sección de noticias -->
                @include('components.news')
                <div class="section-content">
                    <div class="container-sm">
                        <img id="img-section" src="{{URL::asset('./image/calendar.png')}}"><span>Agenda/Eventos</span>
                    </div>
                </div> 
                <!-- @yield('content') esta opción debería mostrar la sección de noticias -->
                @include('components.events')
                <div class="section-content">
                    <div class="container-sm">
                        <img id="img-section" src="{{URL::asset('./image/graduate.png')}}"><span>Áreas acádemicas</span>
                    </div>
                </div>
                @include('components.academicsareas')
                <!-- @yield('content') -->
                <div class="section-content">
                    <div class="container-sm">
                        <img id="img-section" src="{{URL::asset('./image/conection.png')}}"><span>Enlaces de interés</span>
                    </div>
                </div>
                @include('components.linkinterest')
                <!-- @yield('content') -->
                <div class="section-content">
                    <div class="container-sm">
                        <img id="img-section" src="{{URL::asset('./image/map.png')}}"><span>Ubicación</span>
                    </div>
                </div>
                @include('components.location')
                @include('components.footer')

            </div>
        </div>
    </body>
</html>

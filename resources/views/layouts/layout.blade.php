<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
        <script src="{{ URL::asset('./js/app.js') }}"></script> 
        
        <title><img src="{{URL::asset('./image/logounimar.jpg')}}">Portalwerbunimar</title>

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
                            <div class="fa fa-language"></div>
                            <nav class="navbar navbar-light bg-light search-bar">
                                <form class="form-inline">
                                    <input class="search" type="text" placeholder="Search" arial-label="search"><img class="search-img btn" src="{{ URL::asset('./image/lupa_b.png')}}" href="#">
                                </form>
                            </nav>
                        </div><!-- When there is no desire, all things are at peace. - Laozi -->
                    </div>
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
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
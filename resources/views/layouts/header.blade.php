<div class="top-bar">
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-11">
                <div class="float-right dropdown show">
                    <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <img src="{{URL::asset('./image/idioma.png')}}" style="width:25px;">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{URL('lang/es')}}">
                            <img class="rounded-circle"src="{{URL::asset('./image/flags/flag-spain.png')}}" style="width:25px;">
                            {{trans('home.lang-es')}}
                        </a>
                        <a class="dropdown-item" href="{{URL('lang/en')}}">
                            <img class="rounded-circle" src="{{URL::asset('./image/flags/flag-usa.png')}}" style="width:25px;">
                            {{trans('home.lang-en')}}
                        </a>
                        {{--<a class="dropdown-item" href="lang/ita">
                            <img class="rounded-circle" src="{{URL::asset('./image/flags/flag-italy.png')}}" style="width:25px;">
                        {{trans('home.lang-it')}}
                        </a>--}}
                    </div>
                </div>
                <div class="float-right">
                    <a href="mailto:info@unimar.edu.ve">
                        <img class="img-rrss" src="{{URL::asset('./image/rrss/email.png')}}">
                    </a>
                    <a href="https://www.facebook.com/univ.demargarita">
                        <img class="img-rrss" src="{{URL::asset('./image/rrss/facebook.png')}}">
                    </a>
                    <a href="https://www.instagram.com/universidademargarita">
                        <img class="img-rrss" src="{{URL::asset('./image/rrss/instagram.png')}}">
                    </a>
                    <a href="https://www.twitter.com/somosunimar">
                        <img class="img-rrss" src="{{URL::asset('./image/rrss/gorjeo.png')}}">
                    </a>
                    <a href="https://www.linkedin.com/company/univdemargarita">
                        <img class="img-rrss" src="{{URL::asset('./image/rrss/linkedin.png')}}">
                    </a>
                </div>
            </div>
            <div class="col-1">
                @if (Route::has('login'))
                    <div class="float-right small-text-left">
                        @auth
                            <a href="{{ url('/admin') }}">{{ auth()->user()->name }}</a>
                        @else
                            <a href="{{ route('login') }}">
                                <img src="{{URL::asset('./image/login.png')}}" style="width: 25px;">
                            {{--                                <span>{{trans('header.login')}}</span></a>--}}
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="logo horizontal-logo" src="{{asset('image/logo-web-02.png')}}" alt="UNIMAR logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nuestra Institución
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="#">UNIMAR</a>
                            <a class="dropdown-item" href="#">Organización</a>
{{--                            <div class="dropdown-divider"></div>--}}
                            <a class="dropdown-item" href="#">Rectorado</a>
                            <a class="dropdown-item" href="#">Normativas</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Académico
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="#">Vicerrectorado</a>
                            <a class="dropdown-item" href="#">Decanatos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Extensión
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="#">Vicerrectorado</a>
{{--                            <a class="dropdown-item" href="#">Decanatos</a>--}}
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Estudiantes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="#">Nuevo Ingreso</a>
                            <a class="dropdown-item" href="#">Regulares</a>
                            <a class="dropdown-item" href="#">Egresados</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Postgrado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Investigación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>


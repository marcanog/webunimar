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
                    <div class="float-right text-sm-left">
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
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('header.ourinstitut')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="{{url('/ourinstitution')}}">{{trans('header.unimar')}}</a>
                            <a class="dropdown-item" href="{{url('/organization')}}">{{trans('header.organization')}}</a>
{{--                            <div class="dropdown-divider"></div>--}}
                            <a class="dropdown-item" href="#">{{trans('header.rectorade')}}</a>
                            <a class="dropdown-item" href="#">{{trans('home.h-regulations')}}</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('header.academics')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="{{url('/vacademic')}}">{{trans('header.vicerectorade')}}</a>
                            <a class="dropdown-item" href="{{url('/deans')}}">{{trans('header.deanchip')}}</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('header.extent')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="{{url('/vextension')}}">{{trans('header.vicerectorade')}}</a>
{{--                            <a class="dropdown-item" href="#">Decanatos</a>--}}
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('header.student')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="{{url('/newstudents')}}">{{trans('header.new_additions')}}</a>
                            <a class="dropdown-item" href="{{url('/regstudents')}}">{{trans('header.regstudents')}}</a>
                            <a class="dropdown-item" href="{{url('/alumni')}}">{{trans('header.graduates')}}</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/postgrade')}}">{{trans('header.postgrade')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/dptoinvest')}}">{{trans('header.investigation')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/services')}}">{{trans('header.services')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>


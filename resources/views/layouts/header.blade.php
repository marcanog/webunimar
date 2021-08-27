<div class="flex-content position-ref full-height">
            <div class="nav-rrss">
                <div class="top-left links">
                    <div class="flex-row">
                        <div class="flex nav-bar">
                                <div class="rss-bar">
                                    <ul>
                                        <a href="mailto:info@unimar.edu.ve"><img class="img-rrss" src="./image/rrss/email.png"></a>
                                        <a href="https://www.facebook.com/univ.demargarita"><img class="img-rrss" src="./image/rrss/facebook.png"></a>
                                        <a href="https://www.instagram.com/universidademargarita"><img class="img-rrss" src="./image/rrss/instagram.png"></a>
                                        <a href="https://www.twitter.com/somosunimar"><img class="img-rrss" src="./image/rrss/gorjeo.png"></a>
                                        <a href="https://www.linkedin.com/company/univdemargarita"><img class="img-rrss" src="./image/rrss/linkedin.png"></a>
                                    </ul>
                                </div>
                                <nav class="navbar navbar-light bg-light search-bar">
                                    <form class="form-inline">
                                        <input class="search" type="text" placeholder="{{trans('header.input_search')}}" arial-label="search"><img class="search-img btn" src="{{ URL::asset('./image/lupa_b.png')}}" href="#">
                                    </form>
                                </nav>
                                <div class="navbar language-icon">
                                    <div class="nav-item dropdown show" id="languages">
                                        <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="./image/idioma.png" style="width:30px;">
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="lang/es"><img class="rounded-circle" src="{{URL::asset('./image/flags/flag-spain.png')}}" style="width:25px;">{{trans('home.lang-es')}}</a>
                                            <a class="dropdown-item" href="lang/en"><img class="rounded-circle" src="{{URL::asset('./image/flags/flag-usa.png')}}" style="width:25px;">{{trans('home.lang-en')}}</a>
                                            <a class="dropdown-item" href="lang/ita"><img class="rounded-circle" src="{{URL::asset('./image/flags/flag-italy.png')}}" style="width:25px;">{{trans('home.lang-it')}}</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/admin') }}">{{ auth()->user()->name }}</a>
                                @else
                                    <a href="{{ route('login') }}"><img src="{{URL::asset('./image/login.png')}}" style="width: 25px;">{{trans('header.login')}}</a>
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
                <div class="flex flex-container">
                    <div class="flex logo">
                                    <a href="/home"><img class="img-logo" src="{{URL::asset ('./image/unimar.jpg') }}"></a>
                    </div>
                    <div class="flex-bar">
                        <ul class="navbar navbar-light">
                            <li class="nav-item">
                                <a class="navbar-brand" id="header-menu" href="/ourinstitution">
                                    {{trans('header.unimar')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" id="header-menu" href="/organization">
                                    {{trans('header.organization')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" id="header-menu" href="/vacademic">
                                    {{trans('header.academics')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" id="header-menu" href="/vextension">
                                    {{trans('header.extent')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" id="header-menu" href="/deans">
                                    {{trans('header.deanchip')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" id="header-menu" href="/dptoinvest">
                                    {{trans('header.investigation')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" id="header-menu" href="#">
                                    {{trans('header.new_additions')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" id="header-menu" href="#">
                                    {{trans('header.students')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" id="header-menu" href="#">
                                    {{trans('header.graduates')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" id="header-menu" href="#">
                                    {{trans('header.teachers')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" id="header-menu" href="#">
                                    {{trans('header.international')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" id="header-menu" href="#">
                                    {{trans('header.services')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
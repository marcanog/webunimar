<div class="flex-content position-ref full-height" id="headerunimar">
    {{-- top bar --}}
    <div class="nav-rrss">
        <div class="top-left links navbar navbar-expand-lg navbar-light bg-light navbar-text">
            <div class="flex-row nav-bar">
                <div class="rss-bar">
                    <ul>
                        <a href="mailto:info@unimar.edu.ve"><img class="img-rrss"
                                                                 src="{{URL::asset('image/rrss/email.png')}}"></a>
                        <a href="https://www.facebook.com/univ.demargarita"><img class="img-rrss"
                                                                                 src="{{URL::asset('image/rrss/facebook.png')}}"></a>
                        <a href="https://www.instagram.com/universidademargarita"><img class="img-rrss"
                                                                                       src="{{URL::asset('image/rrss/instagram.png')}}"></a>
                        <a href="https://www.twitter.com/somosunimar"><img class="img-rrss"
                                                                           src="{{URL::asset('image/rrss/gorjeo.png')}}"></a>
                        <a href="https://www.linkedin.com/company/univdemargarita"><img class="img-rrss"
                                                                                        src="{{URL::asset('image/rrss/linkedin.png')}}"></a>
                    </ul>
                </div>
                <nav class="navbar navbar-light bg-light search-bar">
                    <form class="search form-inline">
                        <input class="search form-control" type="search" placeholder="{{trans('header.input_search')}}"
                               arial-label="search">
                        <img class="search-img btn btn-outline-success" id="btnsearch"
                             src="{{ URL::asset('image/lupa_b.png')}}" href="#">
                    </form>
                </nav>
                <div class="navbar language-icon">
                    <div class="nav-item dropdown show" id="languages">
                        <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img src="{{URL::asset('image/idioma.png')}}" style="width:30px;">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{URL('lang/es')}}"><img class="rounded-circle"
                                                                                    src="{{URL::asset('image/flags/flag-spain.png')}}"
                                                                                    style="width:25px;">{{trans('home.lang-es')}}
                            </a>
                            <a class="dropdown-item" href="{{URL('lang/en')}}"><img class="rounded-circle"
                                                                                    src="{{URL::asset('image/flags/flag-usa.png')}}"
                                                                                    style="width:25px;">{{trans('home.lang-en')}}
                            </a>
                            {{--<a class="dropdown-item" href="lang/ita"><img class="rounded-circle" src="{{URL::asset('image/flags/flag-italy.png')}}" style="width:25px;">{{trans('home.lang-it')}}</a>--}}
                        </div>
                    </div>
                </div>
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/admin') }}">{{ auth()->user()->name }}</a>
                        @else
                            <a href="{{ route('login') }}"><img src="{{URL::asset('image/login.png')}}"
                                                                style="width: 25px;">{{trans('header.login')}}</a>
                        @endauth
                    </div>
                @endif
            </div>
        </div>
        {{-- Nav bar --}}
        <div class="navbar navbar-expand-lg navbar-light bg-light navbar-text">
            <div class="content-fluid d-flex logo me-4">
                <a href="{{url('/home')}}"><img class="img-logo" src="{{URL::asset ('image/logo-web-02.png') }}"></a>
            </div>
            <div class="d-flex nav-text">
                <ul class="navbar navbar-light">
                    <li class="nav-item">
                        <a class="navbar-brand" id="header-menu" href="{{url('/ourinstitution')}}">
                            {{trans('header.unimar')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" id="header-menu" href="{{url('/organization')}}">
                            {{trans('header.organization')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" id="header-menu" href="{{url('/generalsecretariat')}}">
                            {{trans('header.secretariat')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" id="header-menu" href="{{url('/vacademic')}}">
                            {{trans('header.academics')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" id="header-menu" href="{{url('/deans')}}">
                            {{trans('header.deanchip')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" id="header-menu" href="{{url('/vextension')}}">
                            {{trans('header.extent')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" id="header-menu" href="{{url('/dptoinvest')}}">
                            {{trans('header.investigation')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" id="header-menu" href="{{url('/postgrade')}}">
                            {{trans('header.postgrade')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" id="header-menu" href="{{url('/newstudents')}}">
                            {{trans('header.new_additions')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" id="header-menu" href="{{url('/regstudents')}}">
                            {{trans('header.students')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" id="header-menu" href="{{('/alumni')}}">
                            {{trans('header.graduates')}}
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                         <a class="navbar-brand" id="header-menu" href="#">
                             {{trans('header.international')}}
                         </a>
                     </li>--}}
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

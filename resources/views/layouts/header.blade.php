{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">--}}
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu a::after {
        transform: rotate(-90deg);
        position: absolute;
        right: 6px;
        top: 1.25em;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-left: .1rem;
        margin-right: .1rem;
    }
</style>
<div class="top-bar">
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-10">
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
            <div class="col-2">
                @if(Route::has('login'))
                    <div class="float-right text-sm-left text-truncate">
                        @auth
                            <a class="loginuser" href="{{url('/admin')}}">{{auth()->user()->name}}</a>
                        @else
                            <a href="{{route('login')}}">
                                <img src="{{URL::asset('./image/login.png')}}" style="width: 25px;">
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <a class="navbar-brand text-dark" href="{{url('/home')}}" ><img class="logo horizontal-logo" src="{{asset('image/logo-web-02.png')}}" alt="UNIMAR logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#demo-navbar" aria-controls="demo-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="demo-navbar">
                <div class="navbar-nav mr-auto">
{{--                    <li class="nav-item px-2 active">--}}
{{--                        <a class="nav-link text-dark" href="{{url('/home')}}">Inicio <span class="sr-only">(current)</span></a>--}}
{{--                    </li>--}}
                    <li class="nav-item px-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('header.ourinstitut')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="{{url('/ourinstitution')}}">{{trans('header.unimar')}}</a>
                            <a class="dropdown-item" href="{{url('/organization')}}">{{trans('header.organization')}}</a>
                            <div class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">{{trans('header.administration')}}</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">{{trans('header.estgen')}}</a></li>
                                    <li><a class="dropdown-item" href="#">{{trans('header.humarte')}}</a></li>
                                </ul>
                            </div>
                            <a class="dropdown-item" href="{{url('/rectorade')}}">{{trans('header.rectorade')}}</a>
                            <a class="dropdown-item" href="{{url('/regulations')}}">{{trans('header.h-regulations')}}</a>
                            <a class="dropdown-item" href="{{url('/regulations')}}">{{trans('header.gazzett')}}</a>
                        </div>
                    </li>
                    <li class="nav-item px-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('header.secretariat')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="{{url('/')}}">{{trans('header.ourdepto')}}</a>
                            <a class="dropdown-item" href="{{url('/')}}">{{trans('header.ctrlestu')}}</a>
                            <a class="dropdown-item" href="{{url('/')}}">{{trans('header.healthyestu')}}</a>
                        </div>
                    </li>
                    <li class="nav-item px-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('header.academics')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="{{url('/vacademic')}}" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >{{trans('header.vicerectorade')}}</a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle">{{trans('header.deanchip')}}</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">{{trans('header.estgen')}}</a></li>
                                        <li><a class="dropdown-item" href="#">{{trans('header.humarte')}}</a></li>
                                        <li><a class="dropdown-item" href="#">{{trans('header.ceys')}}</a></li>
                                        <li><a class="dropdown-item" href="#">{{trans('header.cjyp')}}</a></li>
                                        <li><a class="dropdown-item" href="#">{{trans('header.ding')}}</a></li>
                                        <li><a class="dropdown-item" href="#">{{trans('header.comsoc')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                    </li>
                    <li class="nav-item px-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('header.extent')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="{{url('/vextension')}}">{{trans('header.vicerectorade')}}</a>
                            <a class="dropdown-item" href="{{url('/communityserv')}}">{{trans('header.communityserv')}}</a>
                        </div>
                    </li>
                    <li class="nav-item px-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('header.student')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <div class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">{{trans('header.pregrade')}}</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">{{trans('header.new_additions')}}</a></li>
                                    <li><a class="dropdown-item" href="#">{{trans('header.regstudents')}}</a></li>
                                    <li><a class="dropdown-item" href="#">{{trans('header.graduates')}}</a></li>
                                </ul>
                            </div>
                            <div class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">{{trans('header.postgrade')}}</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">{{trans('header.new_additions')}}</a></li>
                                    <li><a class="dropdown-item" href="#">{{trans('header.regstudents')}}</a></li>
                                </ul>
                            </div>
                        </div>
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">--}}
{{--                            <a class="dropdown-item" href="{{url('/newstudents')}}">{{trans('header.new_additions')}}</a>--}}
{{--                            <a class="dropdown-item" href="{{url('/regularstudents')}}">{{trans('header.regstudents')}}</a>--}}
{{--                            <a class="dropdown-item" href="{{url('/alumni')}}">{{trans('header.graduates')}}</a>--}}
{{--                        </div>--}}
                    </li>
{{--                    <li class="nav-item px-2">--}}
{{--                        <a class="nav-link" href="{{url('/postgrade')}}">{{trans('header.postgrade')}}</a>--}}
{{--                    </li>--}}
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{url('/dptoinvest')}}">{{trans('header.investigation')}}</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{url('/services')}}">{{trans('header.services')}}</a>
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            {{trans('header.services')}}--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">{{trans('header.administrative')}}</a>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">{{trans('header.academics')}}</a>--}}
{{--                        </div>--}}
                    </li>
{{--                <form class="form-inline my-2 my-lg-0">--}}
{{--                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>--}}
{{--                </form>--}}
            </div>
        </nav>
    </div>
</div>
<script>
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass("show");
        });

        return false;
    });
</script>


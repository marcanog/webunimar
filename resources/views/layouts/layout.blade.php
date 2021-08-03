<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    <link rel="shortcut icon" href="{{{ asset('image/unimar.ico') }}}">
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet"> 
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css"
    rel="stylesheet"
    />
       
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    
    <!-- MDB -->
    <!-- <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"
    ></script> -->

    <!-- page title -->
    <title>{{trans('home.title')}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <style>
    
        /* .top-right {
            display: flex;
            flex-wrap: nowrap;
            justify-content: flex-start;
            position: absolute;
            right: 10px;
            top: 18px;
            width: 10%;
        } */
         
       
        /* .flex-container {
            display: flex;
            margin: 1em auto;
            position: sticky;
            background-color: #ffffff;
        } */
        .flex-content.position-ref.full-height {
            display: flex;
            justify-content: space-around;
            height: auto;
        }
        .dropdown-item:hover, .dropdown-item:focus {
            color: #16181b;
            text-decoration: none;
            background-color: #336699;
            color: #fff !important;
        }
</style>

</head>
    <body>
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
                                <!-- @if (config('locale.status') && count(config('locale.languages')) > 1)
                                    @foreach (array_keys(config('locale.languages')) as $lang)
                                        @if ($lang != App::getLocale())

                                        @endif

                                    @endforeach
                                    
                                @endif -->
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
                                    <a href="{{ url('/home') }}">{{trans('header.start')}}</a>
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
            <main class="py-main">
                @yield ('content')
            </main>

    <div class="footer col-sm-12">
        <div class="footer-item">
            <div class="info-university">
                <img src={{("./image/logo-blanco.png")}}>
                <span>{{trans('footer.f_location')}}</span>
            </div>
            <div class="our-institution">
                <div>
                    <ul>
                        <li class="footer-item">
                            <a class="footer-title font-weight-bold" href="/ourinstitution">
                                {{trans('footer.f_organization')}}
                            </a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title" href="#">{{trans('footer.f_rectors_office')}}</a>
                        </li>
                        <li class="footer-item">
                                <!-- <a class="footer-title" type="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#modalvice" class="open-modal" data-open="modalvice"><span>{{trans('footer.f_vice_chancellor')}}</span></a> -->
                                <a class="footer-title" href="/vicerectorades">{{trans('footer.f_vice_chancellor')}}</a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title" href="/deans">{{trans('footer.f_deanchip')}}</a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title" href="#">{{trans('footer.f_student_welfare')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="offers">
                <div>
                    <ul>
                        <li class="footer-item">
                            <a class="footer-title font-weight-bold" href="#">
                                {{trans('footer.f_study_offers')}}
                            </a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title" href="#">
                                {{trans('footer.f_undergraduate')}}
                            </a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title" href="#">
                                {{trans('footer.f_postgraduate')}}
                            </a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title" href="#">
                                {{trans('footer.f_diplomas_courses')}}
                            </a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title" href="#">
                                {{trans('footer.f_courses')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="webs-service">
                <div>
                    <ul>
                        <li class="footer-item">
                            <a class="footer-title font-weight-bold" href="#">
                                {{trans('footer.f_web_services')}}
                            </a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title " href="#">
                                {{trans('footer.f_online_payments')}}
                            </a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title " href="#">
                                {{trans('footer.f_payment_bills')}}
                            </a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title " href="#">
                                {{trans('footer.f_elearning')}}
                            </a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title" href="#">
                                {{trans('footer.f_academic_schec')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="quickly-access">
                <div>
                    <ul>
                        <li class="footer-item">
                            <a class="footer-title font-weight-bold" href="#">{{trans('footer.f_quick_links')}}</a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title" href="#">{{trans('footer.f_calendar')}}</a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title" href="#">{{trans('footer.f_dir_telf')}}</a>
                        </li>
                        <li class="footer-item">
                            <span class="footer-text">{{trans('footer.f_contact_us')}}</span>
                        </li>
                    </ul>
                    <div class="rrss">
                        <ul class="flex align-items-center space-x-3">
                            <li class="nav-item">
                                <a href="mailto:info@unimar.edu.ve">
                                <!-- <a onclick="location.href='mailto:info@unimar.edu.ve'"> -->
                                <!-- <a onclick="sendmail()"> -->
                                    <img class="w-6 h-6" src={{('./image/rrss/email.png')}}>
                                </a>
                            </li>
                            <li class="nav-item">
                                <!-- <a onclick="rrss()"> -->
                                <a href="https://www.facebook.com/univ.demargarita">
                                    <img class="w-6 h-6" src={{('./image/rrss/facebook.png')}}>
                                </a>
                            </li>
                            <li class="nav-item">
                                <!-- <a onclick="rrss()"> -->
                                <a href="https://www.twitter.com/somosunimar">
                                
                                    <img class="w-6 h-6" src={{('./image/rrss/gorjeo.png')}}>
                                </a>
                            </li>
                            <li class="nav-item">
                                <!-- <a onclick="rrss()"> -->
                                <a href="https://www.instagram.com/universidademargarita">
                                    <img class="w-6 h-6" src={{('./image/rrss/instagram.png')}}>
                                </a>
                            </li>
                            <li class="nav-item">
                                <!-- <a onclick="rrss()"> -->
                                <a href="https://www.linkedin.com/company/univdemargarita">
                                    <img class="w-6 h-6" src={{('./image/rrss/linkedin.png')}}>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
         <div class="copyright-content">
            <span>© Copyright 2001-2021 Universidad de Margarita, Rif: J-30660040-0. Teléfono: 800-UNIMAR (800-864627). Isla de Margarita - Venezuela.</span>
        </div>
    </div>
   
</body>
</html>
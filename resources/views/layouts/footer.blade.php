<div class="footer col-sm-12" id="footerdesktop">
    <div class="footer-item">
        <div class="info-university">
            <img src={{URL::asset('./image/logo-blanco.png')}}>
            <span>{{trans('footer.f_location')}}</span>
        </div>
        <div class="our-institution">
            <div>
                <ul>
                    <li class="footer-item">
                        <a class="footer-title font-weight-bold" href="{{ URL('/ourinstitution') }}">
                            {{trans('footer.f_organization')}}
                        </a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-title" href="#">{{trans('footer.f_rectors_office')}}</a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-title"
                           href="{{ URL('/vicerectorades') }}">{{trans('footer.f_vice_chancellor')}}</a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-title" href="{{ URL('/deans') }}">{{trans('footer.f_deanchip')}}</a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-title"
                           href="{{ URL('/healthystudent') }}">{{trans('footer.f_student_welfare')}}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="offers">
            <div>
                <ul>
                    <li class="footer-item">
                        <a class="footer-title font-weight-bold" href="{{url('/offerstudy')}}">
                            {{trans('footer.f_study_offers')}}
                        </a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-title" href="{{url('/pregrade')}}">
                            {{trans('footer.f_undergraduate')}}
                        </a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-title" href="{{url('/postgrade')}}">
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
                        <a class="footer-title font-weight-bold" href="{{url('/services')}}">
                            {{trans('footer.f_web_services')}}
                        </a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-title " href="{{url('/payments')}}">
                            {{trans('footer.f_servacad')}}
                        </a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-title " href="#">
                            {{trans('footer.f_servadmin')}}
                        </a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-title " href="https://www.unimarcientifica.edu.ve/adminmoodle/">
                            {{trans('footer.f_elearning')}}
                        </a>
                    </li>
{{--                    <li class="footer-item">--}}
{{--                        <a class="footer-title" href="{{url('/')}}">--}}
{{--                            {{trans('footer.f_helps')}}--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="footer-item">
                        <a class="footer-title" href="https://twitter.com/uniradio_unimar?s=20" target="_blank">
                            {{trans('footer.f_uniradio')}}
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
                        <a class="footer-title" href="{{url('/contactus')}}">{{trans('footer.f_dir_telf')}}</a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-title" href="{{url('/calendaracademy')}}">
                            {{trans('footer.f_calendar')}}
                        </a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-title" href="#">{{trans('footer.f_contact_us')}}</a>
                    </li>
                </ul>
                <div class="rrss">
                    <ul class="d-flex justify-content-center list-unstyled">
                        <li class="nav-item px-1">
                            <a href="mailto:info@unimar.edu.ve">
                                <!-- <a onclick="location.href='mailto:info@unimar.edu.ve'"> -->
                                <!-- <a onclick="sendmail()"> -->
                                <img class="w-6 h-6" src={{URL::asset('/image/rrss/email.png')}}>
                            </a>
                        </li>
                        <li class="nav-item px-1">
                            <!-- <a onclick="rrss()"> -->
                            <a href="https://www.facebook.com/univ.demargarita">
                                <img class="w-6 h-6" src={{URL::asset('/image/rrss/facebook.png')}}>
                            </a>
                        </li>
                        <li class="nav-item px-1">
                            <!-- <a onclick="rrss()"> -->
                            <a href="https://www.twitter.com/somosunimar">
                                <img class="w-6 h-6" src={{URL::asset('/image/rrss/gorjeo.png')}}>
                            </a>
                        </li>
                        <li class="nav-item px-1">
                            <!-- <a onclick="rrss()"> -->
                            <a href="https://www.instagram.com/universidademargarita">
                                <img class="w-6 h-6" src={{URL::asset('/image/rrss/instagram.png')}}>
                            </a>
                        </li>
                        <li class="nav-item px-1">
                            <!-- <a onclick="rrss()"> -->
                            <a href="https://www.linkedin.com/company/univdemargarita">
                                <img class="w-6 h-6" src={{URL::asset('/image/rrss/linkedin.png')}}>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-content">
        <span>{{trans('footer.f-copyrigth')}}</span>
    </div>
</div>
<div class="accordion" id="accordionmobile">
        <div class="content-fluid" style="background-color: #FFFFFF;">
            <div class="card-header">
                <div class="rrss">
                    <ul class="d-flex justify-content-around list-unstyled">
                        <li class="nav-item">
                            <a href="mailto:info@unimar.edu.ve">
                                <!-- <a onclick="location.href='mailto:info@unimar.edu.ve'"> -->
                                <!-- <a onclick="sendmail()"> -->
                                <img class="w-6 h-6" src={{URL::asset('/image/rrss/email.png')}}>
                            </a>
                        </li>
                        <li class="nav-item">
                            <!-- <a onclick="rrss()"> -->
                            <a href="https://www.facebook.com/univ.demargarita">
                                <img class="w-6 h-6" src={{URL::asset('/image/rrss/facebook.png')}}>
                            </a>
                        </li>
                        <li class="nav-item">
                            <!-- <a onclick="rrss()"> -->
                            <a href="https://www.twitter.com/somosunimar">
                                <img class="w-6 h-6" src={{URL::asset('/image/rrss/gorjeo.png')}}>
                            </a>
                        </li>
                        <li class="nav-item">
                            <!-- <a onclick="rrss()"> -->
                            <a href="https://www.instagram.com/universidademargarita">
                                <img class="w-6 h-6" src={{URL::asset('/image/rrss/instagram.png')}}>
                            </a>
                        </li>
                        <li class="nav-item">
                            <!-- <a onclick="rrss()"> -->
                            <a href="https://www.linkedin.com/company/univdemargarita">
                                <img class="w-6 h-6" src={{URL::asset('/image/rrss/linkedin.png')}}>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-fluid">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-white text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        {{trans('footer.f_organization')}}
                        <span class="fa-sm-x2" style="float: right;">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse text-white" aria-labelledby="headingOne" data-parent="#accordionmobile">
                <div class="content">
                   <ul>
                       <li class="footer-item">
                           <a class="footer-title" href="{{url('/rectorade')}}">{{trans('footer.f_rectors_office')}}</a>
                       </li>
                       <li class="footer-item">
                           <a class="footer-title"
                              href="{{ URL('/vicerectorades') }}">{{trans('footer.f_vice_chancellor')}}</a>
                       </li>
                       <li class="footer-item">
                           <a class="footer-title" href="{{ URL('/deans') }}">{{trans('footer.f_deanchip')}}</a>
                       </li>
                       <li class="footer-item">
                           <a class="footer-title"
                              href="{{ URL('/healthystudent') }}">{{trans('footer.f_student_welfare')}}</a>
                       </li>
                   </ul>
                </div>
            </div>
        </div>
        <div class="content-fluid">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-white text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        {{trans('footer.f_study_offers')}}
                        <span class="fa-sm-x2" style="float: right;">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse text-white" aria-labelledby="headingTwo" data-parent="#accordionmobile">
                <div class="content">
                    <ul>
                        <li class="footer-item">
                            <a class="footer-title" href="{{url('/pregrade')}}">
                                {{trans('footer.f_undergraduate')}}
                            </a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title" href="{{url('/postgrade')}}">
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
        </div>
        <div class="content-fluid">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-white text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        {{trans('footer.f_web_services')}}
                        <span class="fa-sm-x2" style="float: right;">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse text-white" aria-labelledby="headingThree" data-parent="#accordionmobile">
                <div class="content">
                    <ul>
                        <li class="footer-item">
                            <a class="footer-title " href="{{url('/payments')}}">
                                {{trans('footer.f_servacad')}}
                            </a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title " href="#">
                                {{trans('footer.f_servadmin')}}
                            </a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title " href="https://www.unimarcientifica.edu.ve/adminmoodle/">
                                {{trans('footer.f_elearning')}}
                            </a>
                        </li>
                    <!-- <li class="footer-item">
                        <a class="footer-title" href="{{url('/')}}">
                            {{trans('footer.f_helps')}}
                        </a>
                    </li> -->
                        <li class="footer-item">
                            <a class="footer-title" href="https://twitter.com/uniradio_unimar?s=20" target="_blank">
                                {{trans('footer.f_uniradio')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-fluid">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-white text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        {{trans('footer.f_quick_links')}}
                        <span class="fa-sm-x2" style="float: right;">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse text-white" aria-labelledby="headingFour" data-parent="#accordionmobile">
                <div class="content">
                    <ul>
                        <li class="footer-item">
                            <a class="footer-title" href="{{url('/contactus')}}">{{trans('footer.f_dir_telf')}}</a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-title" href="{{url('/calendaracademy')}}">
                                {{trans('footer.f_calendar')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-fluid">
            <div class="card-header infou">
                <img src={{URL::asset('./image/logo-blanco.png')}}>
                <span>{{trans('footer.f_location')}}</span>
            </div>
        </div>
        <div class="content-fluid">
            <div class="card-header text-center">
                <span>{{trans('footer.f-copyrigth')}}</span>
            </div>
        </div>
    </div>
{{--        owl carousel js --}}
{{--        <script src="jquery.min.js"></script>--}}
<script src="{{ asset('owlcarousel/dist/owl.carousel.min.js') }}" defer></script>
<style>
    .fa-angle-right {
        transform: scale(1.6);
        margin-left: 8px;
        margin-top: -4px;
    }
    button[aria-expanded='false'] > .fa-sm-x2 > .fa-angle-right {
        transform: scale(1.6) rotate(0deg);
    }
    button[aria-expanded='true'] > .fa-sm-x2 > .fa-angle-right {
        transform: scale(1.6) rotate(-90deg);
    }
</style>
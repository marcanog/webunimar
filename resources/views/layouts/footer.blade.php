<div class="footer col-sm-12">
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
                            {{-- {{trans('footer.f_academic_schec')}}--}}
                            {{trans('footer.f_calendar')}}
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
                        {{--<a class="footer-title" href="#">{{trans('footer.f_calendar')}}</a>--}}
                        <a class="footer-title" href="#">{{trans('footer.f_dir_telf')}}</a>
                    </li>
                    {{--<li class="footer-item">
                        --}}{{--<a class="footer-title" href="#">{{trans('footer.f_dir_telf')}}</a>--}}{{--
                    </li>--}}
                    <li class="footer-item">
                        {{--<span class="footer-text">{{trans('footer.f_contact_us')}}</span>--}}
                        <a class="footer-title" href="#">{{trans('footer.f_contact_us')}}</a>
                    </li>
                </ul>
                <div class="rrss">
                    <ul class="flex align-items-center space-x-3">
                        <li class="nav-item">
                            <a href="mailto:info@unimar.edu.ve">
                                <!-- <a onclick="location.href='mailto:info@unimar.edu.ve'"> -->
                                <!-- <a onclick="sendmail()"> -->
                                <img class="w-6 h-6" src={{ URL::asset('./image/rrss/email.png') }}>
                            </a>
                        </li>
                        <li class="nav-item">
                            <!-- <a onclick="rrss()"> -->
                            <a href="https://www.facebook.com/univ.demargarita">
                                <img class="w-6 h-6" src={{ URL::asset('./image/rrss/facebook.png') }}>
                            </a>
                        </li>
                        <li class="nav-item">
                            <!-- <a onclick="rrss()"> -->
                            <a href="https://www.twitter.com/somosunimar">
                                <img class="w-6 h-6" src={{ URL::asset('./image/rrss/gorjeo.png') }}>
                            </a>
                        </li>
                        <li class="nav-item">
                            <!-- <a onclick="rrss()"> -->
                            <a href="https://www.instagram.com/universidademargarita">
                                <img class="w-6 h-6" src={{ URL::asset('./image/rrss/instagram.png') }}>
                            </a>
                        </li>
                        <li class="nav-item">
                            <!-- <a onclick="rrss()"> -->
                            <a href="https://www.linkedin.com/company/univdemargarita">
                                <img class="w-6 h-6" src={{ URL::asset('./image/rrss/linkedin.png') }}>
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- <li class="footer-item justify-content-center">
                             <span class="d-flex bd-highlight mt-2 ml-4">
                                     @if (Route::has('login'))
                                     --}}{{--<div class="top-right links">--}}{{--
                                     @auth
                                         <a class="footer-title"
                                            href="{{ url('/admin') }}">{{trans('commons.user_login')}}{{ auth()->user()->name }}</a>
                                     @else
                                         <a class="footer-title" href="{{ route('login') }}"><img
                                                 src="{{URL::asset('./image/login.png')}}" style="width: 25px;">{{trans('header.login')}}</a>
                                     @endauth
                                     --}}{{-- </div>--}}{{--
                                 @endif
                             </span>
                 </li>--}}
            </div>
        </div>
    </div>
    <div class="copyright-content">
        <span>{{trans('footer.f-copyrigth')}}</span>
    </div>
</div>

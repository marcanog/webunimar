                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar border-left pl-4">
{{--                            <div class="widget">--}}
{{--                                <div class="banner-spot clearfix">--}}
{{--                                    <div class="banner-img">--}}
{{--                                        <img src="https://radarcovid.app/wp-content/uploads/2020/08/radarcovidapp-banner-300x600-1.jpg" alt="" class="img-fluid">--}}
{{--                                    </div><!-- end banner-img -->--}}
{{--                                </div><!-- end banner -->--}}
{{--                            </div><!-- end widget -->--}}

                            <div class="widget mt-5">
                                <h2 class="widget-title text-dark font-weight-bold">Últimos eventos</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        @foreach($events as $event)
                                            <a href="/eventsunimar" class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <img src="{{asset('image/calendar.png')}}" alt="" class="img-fluid float-left">
                                                    <h5 class="mb-1">{{ $event['title'] }}</h5>
                                                    <small>{{ $event['start'] }}</small>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title text-dark font-weight-bold">Últimos tweets</h2>
                                <blockquote class="twitter-tweet"><p lang="es" dir="ltr">Abiertas las inscripciones de Curso Introductorio Online que comienza el 14 y culmina el 25 de marzo próximos. <a href="https://t.co/ff5uxy4YZQ">pic.twitter.com/ff5uxy4YZQ</a></p>&mdash; Univ de Margarita (@somosunimar) <a href="https://twitter.com/somosunimar/status/1493540780392255489?ref_src=twsrc%5Etfw">February 15, 2022</a></blockquote>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                <!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title text-dark font-weight-bold">Síguenos</h2>

                                <div class="row text-center px-4">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://www.facebook.com/univ.demargarita">
                                            <img class="img-rrss" src="{{URL::asset('./image/rrss/facebook.png')}}">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://www.instagram.com/universidademargarita">
                                            <img class="img-rrss" src="{{URL::asset('./image/rrss/instagram.png')}}">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://www.twitter.com/somosunimar">
                                            <img class="img-rrss" src="{{URL::asset('./image/rrss/gorjeo.png')}}">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://www.linkedin.com/company/univdemargarita">
                                            <img class="img-rrss" src="{{URL::asset('./image/rrss/linkedin.png')}}">
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end widget -->

{{--                            <div class="widget">--}}
{{--                                <div class="banner-spot clearfix">--}}
{{--                                    <div class="banner-img">--}}
{{--                                        <img src="{{ asset('tech-blog/upload/banner_03.jpg') }}" alt="" class="img-fluid">--}}
{{--                                    </div><!-- end banner-img -->--}}
{{--                                </div><!-- end banner -->--}}
{{--                            </div><!-- end widget -->--}}
                        </div><!-- end sidebar -->
                    </div><!-- end col -->

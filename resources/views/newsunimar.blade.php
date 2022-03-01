@extends('layouts.layout')

@section('styles')
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- FontAwesome Icons core CSS -->
    <link href="{{ asset('tech-blog/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('tech-blog/style.css') }}" rel="stylesheet">
    <!-- Responsive styles for this template -->
    <link href="{{ asset('tech-blog/css/responsive.css') }}" rel="stylesheet">
    <!-- Version Tech CSS for this template -->
    <link href="{{ asset('tech-blog/css/version/tech.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/es/ourinstitution.jpg')}}">
        </div>
{{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}"><span>{{trans('newsu.n-title')}}</span>
            </div>
        </div>
{{--        Inicio de la plantilla de noticias --}}
{{--    <div id="wrapper">--}}
{{--        <section class="section first-section" style="margin-top:0;">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="masonry-blog clearfix">--}}
{{--                    <div class="first-slot nw-last">--}}
{{--                        <div class="masonry-box post-media">--}}
{{--                             <img src="{{ asset('tech-blog/upload/tech_01.jpg') }}" alt="" class="img-fluid">--}}
{{--                             <div class="shadoweffect">--}}
{{--                                <div class="shadow-desc">--}}
{{--                                    <div class="blog-meta">--}}
{{--                                        <span class="bg-orange"><a href="#" title="" class="last-news-tags tags-id"></a></span>--}}
{{--                                        <h4><a href="#" title="" class="last-news-title"></a></h4>--}}
{{--                                        <small><a href="#" title="" class="last-news-date"></a></small>--}}
{{--                                    </div><!-- end meta -->--}}
{{--                                </div><!-- end shadow-desc -->--}}
{{--                            </div><!-- end shadow -->--}}
{{--                        </div><!-- end post-media -->--}}
{{--                    </div><!-- end first-side -->--}}

{{--                    <div class="second-slot nw-last">--}}
{{--                        <div class="masonry-box post-media">--}}
{{--                             <img src="{{ asset('tech-blog/upload/tech_02.jpg') }}" alt="" class="img-fluid">--}}
{{--                             <div class="shadoweffect">--}}
{{--                                <div class="shadow-desc">--}}
{{--                                    <div class="blog-meta">--}}
{{--                                        <span class="bg-orange"><a href="#" title="" class="last-news-tags tags-id"></a></span>--}}
{{--                                        <h4><a href="#" title="" class="last-news-title"></a></h4>--}}
{{--                                        <small><a href="#" title="" class="last-news-date"></a></small>--}}
{{--                                    </div><!-- end meta -->--}}
{{--                                </div><!-- end shadow-desc -->--}}
{{--                             </div><!-- end shadow -->--}}
{{--                        </div><!-- end post-media -->--}}
{{--                    </div><!-- end second-side -->--}}

{{--                    <div class="last-slot nw-last">--}}
{{--                        <div class="masonry-box post-media">--}}
{{--                             <img src="{{ asset('tech-blog/upload/tech_03.jpg') }}" alt="" class="img-fluid">--}}
{{--                             <div class="shadoweffect">--}}
{{--                                <div class="shadow-desc">--}}
{{--                                    <div class="blog-meta">--}}
{{--                                        <span class="bg-orange"><a href="#" title="" class="last-news-tags tags-id"></a></span>--}}
{{--                                        <h4><a href="#" title="" class="last-news-title"></a></h4>--}}
{{--                                        <small><a href="#" title="" class="last-news-date"></a></small>--}}
{{--                                    </div><!-- end meta -->--}}
{{--                                </div><!-- end shadow-desc -->--}}
{{--                             </div><!-- end shadow -->--}}
{{--                        </div><!-- end post-media -->--}}
{{--                    </div><!-- end second-side -->--}}
{{--                </div><!-- end masonry -->--}}
{{--            </div>--}}
{{--        </section>--}}

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix" style="margin-top:2rem;">
                                <h4 class="pull-left">Noticias Recientes <a href=""><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                            <div id="news-space" class="blog-list clearfix">

                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->
                        @foreach($news as $new)
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="/newsunimar/.{{$new->first_tag}}/{{$new->title}}/{{$new->id}}" title="">
                                            <img src="{{asset('image/newsimg/unimar3.jpg')}}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8 text-left">
                                    <h4><a href="/newsunimar/{{$new->first_tag}}/{{$new->title}}/{{$new->id}}" title="">{{ $new->title }}</a></h4>
                                    <p>{!!($new->resume)!!}</p>
                                    <small class="firstsmall"><a class="bg-orange tags-id" href="/newsunimar/.{{$new->first_tag}}/{{$new->title}}/{{$new->id}}" title="">{{ $new->first_tag }}</a></small>
                                    <small><a href="/newsunimar/.{{$new->first_tag}}/{{$new->title}}/{{$new->id}}" title="" class="recent-news-date">{{ $new->created_at }}</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
{{--                            <hr class="invis">--}}
                        @endforeach
                        {{$news->links()}}
                    </div><!-- end col -->
                    @include('layouts.sidebarnews')
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

    </div><!-- end wrapper -->

    <script src="{{ asset('tech-blog/js/jquery.min.js') }}"></script>
    <script src="{{ asset('tech-blog/js/tether.min.js') }}"></script>
    <script src="{{ asset('tech-blog/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tech-blog/js/custom.js') }}"></script>
    <script>
        //Format news' dates text
        let i = 0;
        @include('components.formatNewsDate')
        @for ($i = 0; $i < 3; $i++)
            date = new Date("{{$threenews[$i]->created_at}}");
            link = "/newsunimar/{{$threenews[$i]->first_tag}}/{{$threenews[$i]->title}}/{{$threenews[$i]->id}}";
            document.getElementsByClassName("last-news-tags")[i].innerText = "{{$threenews[$i]->first_tag}}";
            document.getElementsByClassName("last-news-title")[i].innerText = "{{$threenews[$i]->title}}";
            document.getElementsByClassName("last-news-date")[i].innerText = days[date.getDay()]+', '+date.getDate()+' de '+month[date.getMonth()]+' de '+date.getUTCFullYear();
            //Set links routing
            document.getElementsByClassName("last-news-tags")[i].href = link;
            document.getElementsByClassName("last-news-title")[i].href = link;
            document.getElementsByClassName("last-news-date")[i].href = link;
            i++;
        @endfor
    </script>
@endsection


@extends('layouts.layout')

@section ('content')
    <div class=".xl-container">
        <div class="banner-main">
            <img src="{{URL::asset('/image/viceacademic.png')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}"><span
                    style="font-size: 0.85em; width: 55%;">{{trans('offers.o-title')}}</span>
            </div>
        </div>
        {{--contents offers--}}
        <div class="d-inline-flex justify-content-around m-4 content-vext">
            {{--pregrade--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                 aria-controls="collapse1">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/secretary.png')}}">
                    <span>{{trans('offers.o-pregrade')}}</span>
                </a>
            </div>
            {{--postgrade--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/settings.svg')}}">
                    <span>{{trans('offers.o-postgrade')}}</span>
                </a>
            </div>
            {{--diplomas--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                 aria-controls="collapse4">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/lecture.png')}}">
                    <span>{{trans('offers.o-diplmade')}}</span>
                </a>
            </div>
            {{--courses--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                 aria-controls="collapse4">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/lecture.png')}}">
                    <span>{{trans('offers.o-courses')}}</span>
                </a>
            </div>
        </div>
        {{--offers for depts--}}
        {{--pregrade--}}
            <div class="collapse col-md-12" id="collapse">
                <div class="container col-md-12">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('offers.o-systemeng')}}</p>
                    <div class="content-areas">
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('./image/scholarship.png')}}">
                                <span>{{trans('offers.o-humarte')}}</span>
                            </a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="{{url('/healthymental')}}">
                                <img src="{{URL::asset('./image/mental-healthy.png')}}">
                                <span>{{trans('offers.o-humarte')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#">
                                <img src="{{URL::asset('./image/social-teaching.png')}}">
                                <span>{{trans('offers.o-humarte')}}</span></a>
                        </div>
                        {{--links interest--}}
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('/image/conection.png')}}">
                                <span>{{trans('offers.oo-humarte')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            {{--postgrade--}}
            <div class="collapse col-md-12" id="collapse">
                <div class="container col-md-12">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('healthy.health-depts')}}</p>
                    <div class="content-areas">
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('./image/scholarship.png')}}">
                                <span>{{trans('healthy.health-becas')}}</span>
                            </a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="{{url('/healthymental')}}">
                                <img src="{{URL::asset('./image/mental-healthy.png')}}">
                                <span>{{trans('healthy.health-psico')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#">
                                <img src="{{URL::asset('./image/social-teaching.png')}}">
                                <span>{{trans('healthy.health-pedag')}}</span></a>
                        </div>
                        {{--links interest--}}
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('/image/conection.png')}}">
                                <span>{{trans('healthy.health-links')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>

    </div>
@endsection

@extends('layouts.layout')

@section ('content')
<style>
        .d-flex.justify-content-start > span {
            position: relative;
            top: 0.6rem;
            left: 0.7rem;
            color: #FFFFFF;
            font-weight: 700;
            font-size: 0.95em;
            letter-spacing: 0.025em;
            word-wrap: break-word;
            width: 65%;
        }

        p {
            animation-duration: 3s;
            animation-name: slidein;
        }

        @keyframes slidein {
            from {
                margin-left: 100%;
                width: 300%
            }

            to {
                margin-left: 0%;
                width: 100%;
            }
        }

        #cardauthor {
            padding: .5rem;
            height: 215px !important;
        }

        #imgcrd {
            padding: .5rem;
        }

        .card-title {
            margin-bottom: .5rem;
            float: right;
            position: relative;
            bottom: 10rem;
        }

        .card-columns {
            -webkit-column-count: 2;
            -moz-column-count: 2;
            column-count: 2;
            -webkit-column-gap: 1.25rem;
            -moz-column-gap: 1.25rem;
            column-gap: 1.25rem;
            margin: 0 auto;
        }

        #imgcard {
            color: #4f4f4f !important;
            font-weight: 600;
        }

        #vext-author {
            font-size: 1.5rem;
        }

        #vext-authort {
            font-size: 1rem;
        }

        #vext-email {
            font-size: .75rem;
        }

        .flex.content-vext {
            justify-content: space-around;
            margin: 1rem 1.3rem;
            padding: 0 1.5rem 1rem 0;
        }

        .col-md-12 #collapse {
            margin: 0 auto;
        }

        .col-sm-11 .card.card-body {
            text-align: justify;
            margin: 1rem auto;
            padding: 2.5rem;
        }

        .card.card-body ul > li {
            list-style: disc;
        }

        .col-sm-11 .card.card-body p + p {
            text-indent: 1.5em;
            margin-top: 0;
        }

        #collapse, #collapse2, #collapse3 {
            margin: 0 auto;
        }

        .info-dept.col-md-10.card.card-body {
            margin: 0 auto;
        }

        .conten-subsytem > a > img {
            display: flex;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
            justify-content: space-around;
            width: 60%;
            margin: 0 auto;
            padding: 1rem;
        }

        .conten-subsytem {
            display: flex;
            border-radius: 20px;
            border: 1px solid #c1c1c1;
            width: 20%;
            padding: .5rem;
        }

        #link-subsystem > span {
            display: flex;
            flex: 0 0 25%;
            margin: 1em;
            font-size: 0.95em;
            justify-content: center;
            color: #FFFFFF;
            text-align: center;
        }

        #link-subsystem > span:hover {
            text-decoration: none;
        }

        .content-areas.col-12 {
            justify-content: space-evenly;
            margin: 0 auto;
        }
    </style>
    <div class=".xl-container">
        <div class="banner-main">
            <img src="{{URL::asset('image/viceacademic.png')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('image/logo-unimar.png')}}"><span
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
                    <img src="{{URL::asset('image/student.png')}}">
                    <span>{{trans('offers.o-pregrade')}}</span>
                </a>
            </div>
            {{--postgrade--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('image/master.png')}}">
                    <span>{{trans('offers.o-postgrade')}}</span>
                </a>
            </div>
            {{--diplomas--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                 aria-controls="collapse4">
                <a id="campusbtn">
                    <img src="{{URL::asset('image/certificade.png')}}">
                    <span>{{trans('offers.o-diplmade')}}</span>
                </a>
            </div>
            {{--courses--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                 aria-controls="collapse4">
                <a id="campusbtn">
                    <img src="{{URL::asset('image/online-learning.png')}}">
                    <span>{{trans('offers.o-courses')}}</span>
                </a>
            </div>
        </div>
        {{--offers for depts--}}
        {{--pregrade--}}
            <div class="collapse col-md-12" id="collapse">
                <div class="container col-md-12">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('offers.o-pregrade')}}</p>
                    <div class="content-areas">
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('image/scholarship.png')}}">
                                <span>{{trans('offers.o-enginerrs')}}</span>
                            </a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="{{url('/healthymental')}}">
                                <img src="{{URL::asset('image/mental-healthy.png')}}">
                                <span>{{trans('offers.o-humarte')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#">
                                <img src="{{URL::asset('image/social-teaching.png')}}">
                                <span>{{trans('offers.o-ceys')}}</span></a>
                        </div>
                        {{--links interest--}}
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('image/conection.png')}}">
                                <span>{{trans('offers.o-cjyp')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            {{--postgrade--}}
            <div class="collapse col-md-12" id="collapse2">
                <div class="container col-md-12">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('offers.o-postgrade')}}</p>
                    <div class="content-areas">
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('image/scholarship.png')}}">
                                <span>{{trans('o-doctor')}}</span>
                            </a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                                <img src="{{URL::asset('image/mental-healthy.png')}}">
                                <span>{{trans('offers.o-certf')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                                <img src="{{URL::asset('image/social-teaching.png')}}">
                                <span>{{trans('offers.o-spec')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('image/conection.png')}}">
                                <span>{{trans('offers.o-spec-tec')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            {{--diplomas--}}
            <div class="collapse col-md-12" id="collapse3">
                <div class="container col-md-12">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('offers.o-diplomas')}}</p>
                    <div class="content-areas">
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('image/certificade.png')}}">
                                <span>{{trans('offers.o-doctor')}}</span>
                            </a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                                <img src="{{URL::asset('image/mental-healthy.png')}}">
                                <span>{{trans('offers.o-certf')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                                <img src="{{URL::asset('image/social-teaching.png')}}">
                                <span>{{trans('offers.o-spec')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('image/conection.png')}}">
                                <span>{{trans('offers.o-spec-tec')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            {{--courses--}}
            <div class="collapse col-md-12" id="collapse4">
                <div class="container col-md-12">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('offers.o-courses')}}</p>
                    <div class="content-areas">
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                            <a id="link-subsystem" href="#">
                                <img src="{{URL::asset('image/scholarship.png')}}">
                                <span>{{trans('offers.o-doctor')}}</span>
                            </a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                                <img src="{{URL::asset('image/mental-healthy.png')}}">
                                <span>{{trans('offers.o-certf')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                                <img src="{{URL::asset('image/social-teaching.png')}}">
                                <span>{{trans('offers.o-spec')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('image/conection.png')}}">
                                <span>{{trans('offers.o-spec-tec')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection

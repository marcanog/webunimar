@extends('layouts.layout')

@section('content')
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
            <img src="{{asset('./image/nuestrosdecanatos.png')}}">
        </div>
    </div>
    <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section"
                 src="{{URL::asset('./image/healthy.png')}}"><span>{{trans('home.students-healthy')}}</span>
        </div>
    </div>
    <div class=".xl-container">
        <div class="card-columns col-sm-11">
            <a class="btn-link card-img" id="imgcard">
                <div class="card row" id="cardauthor">
                    <div class="col-md-4">
                        <img id="imgcrd" src="{{URL::asset('./image/healthydep/coordhealthy.jpg')}}"
                             alt="Lcda. Angelina Yanez" style="width:100%;">
                    </div>
                    <div class="card-title col-md-8">
                        <p id="vext-author">{{trans('healthy.health-author')}}</p>
                        <p id="vext-authort">{{trans('healthy.health-author-title')}}</p>
                        <p id="vext-email">{{trans('healthy.health-author-email')}}</p>
                    </div>
                </div>
            </a>
            {{--<a class="btn-link card-img" id="imgcard">
                <div class="card row" id="cardauthor">
                    <div class="col-md-4">
                        --}}{{--<img id="imgcrd" src="{{URL::asset('./image/.jpg')}}" alt="Iraida Hernández" style="width:105%; height:12.5rem;">--}}{{--
                        <div style="width:95%; height:180px; background-color: #6699cc; margin: .5rem;">
                            <img id="imgcrd" src="{{URL::asset('./image/avatar.svg')}}"
                                 alt="{{('healthy.health-asist')}}"
                                 style="width:100%; height: 70%; position: relative; top: 1rem;">
                        </div>
                    </div>
                    <div class="card-title col-md-8">
                        <p id="vext-author">{{trans('healthy.health-asist')}}</p>
                        <p id="vext-authort">{{trans('healthy.health-atitle')}}</p>
                        <p id="vext-email">{{trans('healthy.health-asitmail')}}</p>
                    </div>
                </div>
            </a>--}}
        </div>
        {{--contents--}}
        <div class="d-inline-flex justify-content-around m-4 content-vext">
            {{--Description--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                 aria-controls="collapse1">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/healthy.png')}}">
                    <span>{{trans('healthy.health-title')}}</span>
                </a>
            </div>
            {{--Mision--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/target.svg')}}">
                    <span>{{trans('healthy.health-mission-title')}}</span>
                </a>
            </div>
            {{--vision--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/eye.svg')}}">
                    <span>{{trans('healthy.health-vision-title')}}</span>
                </a>
            </div>
            {{--Functions--}}
            {{--<div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/settings.svg')}}">
                    <span>{{trans('healthy.health-functions')}}</span>
                </a>
            </div>--}}
            {{--units ads--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                 aria-controls="collapse4">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/lecture.png')}}">
                    <span>{{trans('healthy.health-depts')}}</span>
                </a>
            </div>
        </div>
        {{--contents cards bodies--}}
        <div class="d-inline-flex justify-content-around flex-column m-4" id="contevext">
            {{--descripction--}}
            <div class="collapse col-lg-12 m-4" id="collapse">
                <div class="card card-body sectionbody">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('healthy.health-title')}}
                    </p>
                    <p class="text-justify"> {{trans('healthy.health-descrip')}}</p>
                </div>
            </div>
            {{--Mision--}}
            <div class="collapse col-lg-12 m-4" id="collapse2">
                <div class="card card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('healthy.health-mission-title')}}
                    </p>
                    <ul>
                        <li><p> {{trans('healthy.health-mission')}}</p></li>
                    </ul>
                </div>
            </div>
            {{--vision--}}
            <div class="collapse col-lg-12 m-4" id="collapse3">
                <div class="card card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('healthy.health-vision-title')}}
                    </p>
                    <ul>
                        <li><p> {{trans('healthy.health-vision')}}</p></li>
                    </ul>
                </div>
            </div>
            {{--Departaments--}}
            <div class="collapse col-md-12" id="collapse4">
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
            {{--units ads to depts--}}
            {{--Gazzete--}}
            <div class="content-areas col-md-12" id="contevac">
                <div class="collapse col-sm-11" id="collapseExample">
                    <div class="content-areas col-12">
                        <div class="conten-subsytem" style="background-color: #004c9c">
                            <a id="link-subsystem" href="#"><img
                                    src="{{URL::asset('/image/gaceta.png')}}">
                                <span>{{trans('healthy.health-gazzete')}}</span></a>
                        </div>
                        {{--reports--}}
                        <div class="conten-subsytem" style="background-color: #004c9c">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('/image/personal-information.png')}}">
                                <span>{{trans('healthy.health-report')}}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-dept d-flex m-4 card card-body">
            <h5>{{trans('postgrade.postg-info-title')}}</h5>
            <p>
                <b>{{trans('healthy.health-info-title')}}</b>&nbsp {{trans('healthy.health-info-email')}}
            </p>
            <p>
                <b>{{trans('healthy.health-info-teltit')}}</b>&nbsp{{trans('healthy.health-info-telf')}}
            </p>
            <p>
                <b>{{trans('healthy.health-info-schedtit')}}</b>&nbsp{{trans('healthy.health-info-sched')}}
            </p>
        </div>
@endsection

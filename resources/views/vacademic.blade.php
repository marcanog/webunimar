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
            <img src="{{asset('/image/viceacademic.png')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/graduate.png')}}"><span>{{trans('vacademy.vacad-title')}}</span>
            </div>
        </div>
        <div class=".xl-container">
            <!-- {{--info represents--}}
            <div class="card-columns col-sm-11">
                <a class="btn-link card-img" id="imgcard">
                    <div class="card row" id="cardauthor">
                        <div class="col-md-4">
                            <img id="imgcrd" src="{{URL::asset('/image/csuperior/antoniomartinez.jpg')}}"
                                 alt="Ing. Antonio Martínez">
                        </div>
                        <div class="card-title col-md-8">
                            <p id="vext-author">{{trans('vacademy.vacad-author')}}</p>
                            <p id="vext-authort">{{trans('vacademy.vacad-author-title')}}</p>
                            <p id="vext-email">{{trans('vacademy.vacad-author-email')}}</p>
                        </div>
                    </div>
                </a>
                <a class="btn-link card-img" id="imgcard">
                    <div class="card row" id="cardauthor">
                        <div class="col-md-4">
                            <img id="imgcrd" src="{{URL::asset('/image/asistenteviceacadem.jpg')}}" alt="Livia García"
                                 style="width:105%; height:12.5rem;">
                        </div>
                        <div class="card-title col-md-8">
                            <p id="vext-author">{{trans('vacademy.vacad-asist')}}</p>
                            <p id="vext-authort">{{trans('vacademy.vacad-atitle')}}</p>
                            <p id="vext-email">{{trans('vacademy.vacad-asitmail')}}</p>
                        </div>
                    </div>
                </a>
            </div> -->
            {{--  cards presentation --}}
            <div class="d-flex justify-content-around m-4">
                <div class="card-group">
                    <div class="card m-4">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Vicerrector Académico" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title">{{trans('vacademy.vacad-author')}}</h3>
                                    <p class="card-text font-weight-bold">{{trans('vacademy.vacad-author-title')}}</p>
                                    <p class="card-text"><small class="text-muted">{{trans('vacademy.vacad-author-email')}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-4">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Secretaria Vicerrectorado Académico" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title">{{trans('vacademy.vacad-asist')}}</h3>
                                    <p class="card-text font-weight-bold">{{trans('vacademy.vacad-atitle')}}</p>
                                    <p class="card-text"><small class="text-muted">{{trans('vacademy.vacad-asitmail')}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--contens--}}
            <div class="flex content-vext">
                <div class="links-interest" id="contentimg" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('/image/settings.svg')}}">
                        <span>{{trans('vacademy.vacad-functions')}}</span>
                    </a>
                </div>
                <div class="links-interest" id="contentimg" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                     aria-controls="collapse3">
                    <a id="campusbtn">
                        <img src="{{URL::asset('/image/unity.svg')}}">
                        <span>{{trans('vacademy.vacad-units')}}</span>
                    </a>
                </div>
                <div class="links-interest" id="contentimg" style="background-color: #336699">
                    <a id="campusbtn" href="{{url('/orgstructure')}}">
                        <img src="{{URL::asset('/image/flow-chart.svg')}}">
                        <span>{{trans('vacademy.vacad-struct')}}</span>
                    </a>
                </div>{{--fin struct--}}
            </div>
            <div class="col-md-12" id="contevext">
                {{--<div class="collapse col-sm-11" id="collapse">
                    <div class="card card-body">
                        <p style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('vextension.vext-mision-title')}}
                        </p>
                        <p> {{trans('vacademy.vacad-mission')}}</p>
                    </div>
                </div>--}}
                <div class="collapse col-sm-11" id="collapse2">
                    <div class="card card-body">
                        <p style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('vacademy.vacad-functions')}}
                        </p>
                        <ul>
                            <li><p> {{trans('vacademy.vacad-functions-1')}}</p></li>
                            <li><p> {{trans('vacademy.vacad-functions-2')}}</p></li>
                            <li><p> {{trans('vacademy.vacad-functions-3')}}</p></li>
                            <li><p> {{trans('vacademy.vacad-functions-4')}}</p></li>
                            <li><p> {{trans('vacademy.vacad-functions-5')}}</p></li>
                            <li><p> {{trans('vacademy.vacad-functions-6')}}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="collapse col-sm-11" id="collapse3">
                    <div class="container col-md-12">
                        <p style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('vacademy.vacad-units')}}
                        </p>
                        <div class="content-areas">
                            <div class="conten-subsytem" style="background-color: #6699cc;">
                                <a id="link-subsystem" href="http://biblioteca.ucv.ve/">
                                    <img src="{{URL::asset('/image/libraryonline.png')}}">
                                    <span>{{trans('vacademy.vacad-biblioc')}}</span>
                                </a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc;">
                                <a id="link-subsystem" href="{{url('/comcurricula')}}">
                                    <img src="{{URL::asset('/image/algorithm.svg')}}">
                                    <span>{{trans('vacademy.vacad-comcurric')}}</span>
                                </a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc;">
                                <a id="link-subsystem" href="{{url('/deans')}}">
                                    <img src="{{URL::asset('/image/insurance.svg')}}">
                                    <span>{{trans('vacademy.vacad-deans')}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="content-areas">
                            <div class="conten-subsytem" style="background-color: #6699cc;">
                                <a id="link-subsystem" href="https://www.unimarcientifica.edu.ve/adminmoodle/">
                                    <img src="{{URL::asset('/image/elearning.png')}}">
                                    <span>{{trans('vacademy.vacad-elearning')}}</span></a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="{{url('/estprepareds')}}">
                                    <img src="{{URL::asset('./image/lecture.svg')}}">
                                    <span>{{trans('vacademy.vacad-prep')}}</span>
                                </a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                                 href="#collapseExample" role="button" aria-expanded="false"
                                 aria-controls="collapseExample">
                                <a id="link-subsystem">
                                    <img src="{{URL::asset('/image/conection.png')}}">
                                    <span>{{trans('vacademy.vacad-links')}}</span></a>
                            </div>
                        </div>
                        <div class="content-areas col-md-12" id="contevac">
                            <div class="collapse col-sm-11" id="collapseExample">
                                <div class="content-areas col-12">
                                    <div class="conten-subsytem" style="background-color: #004c9c">
                                        <a id="link-subsystem" href="#"><img
                                                src="{{URL::asset('/image/graduation.svg')}}">
                                            <span>{{trans('vacademy.vacad-nva')}}</span></a>
                                    </div>
                                    <div class="conten-subsytem" style="background-color: #004c9c">
                                        <a id="link-subsystem" href="#">
                                            <img src="{{URL::asset('/image/university.svg')}}">
                                            <span>{{trans('vacademy.vacad-unesco')}}</span>
                                        </a>
                                    </div>
                                    <div class="conten-subsytem" style="background-color: #004c9c">
                                        <a id="link-subsystem" href="#">
                                            <img src="{{URL::asset('/image/graduation-hat.svg')}}">
                                            <span>{{trans('vacademy.vacad-other')}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-dept col-sm-11 card card-body">
                <h5>{{trans('vacademy.vacad-info-title')}}</h5>
                <p><b>{{trans('vacademy.vacad-info-etitle')}}</b>&nbsp {{trans('vacademy.vacad-info-email')}}</p>
                <p><b>{{trans('vacademy.vacad-info-teltit')}}</b>&nbsp{{trans('vacademy.vacad-info-telf')}}</p>
                <p><b>{{trans('vacademy.vacad-info-schedtit')}}</b>&nbsp{{trans('vacademy.vacad-info-sched')}}</p>
            </div>
        </div>
    </div>
@endsection

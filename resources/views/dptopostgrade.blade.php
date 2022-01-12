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

        .links-interest {
            width: 20%;
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
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('./image/graduate.png')}}"><span>{{trans('postgrade.postg-title')}}</span>
            </div>
        </div>
        <div class="d-inline-flex flex-column justify-content-around m-4">
            <div class="card-columns col-sm-12 ml-2">
                <a class="btn-link card-img" id="imgcard">
                    <div class="card row" id="cardauthor">
                        <div class="col-md-4">
                            <div style="width:95%; height:180px; background-color: #6699cc; margin: .5rem;">
                                <img id="imgcrd" src="{{URL::asset('/image/avatar.svg')}}" alt=" "
                                     style="width:100%; height: 70%; position: relative; top: 1rem;">
                            </div>
                            {{--<img id="imgcrd" src="{{URL::asset('./image/csuperior/antoniomartinez.jpg')}}"
                                 alt="Ing. Antonio Martínez">--}}
                        </div>
                        <div class="card-title col-md-8">
                            <p id="vext-author">{{trans('postgrade.postg-author')}}</p>
                            <p id="vext-authort">{{trans('postgrade.postg-author-title')}}</p>
                            <p id="vext-email">{{trans('postgrade.postg-author-email')}}</p>
                        </div>
                    </div>
                </a>
                <a class="btn-link card-img" id="imgcard">
                    <div class="card row" id="cardauthor">
                        <div class="col-md-4">
                            <div style="width:95%; height:180px; background-color: #6699cc; margin: .5rem;">
                                <img id="imgcrd" src="{{URL::asset('/image/avatar.svg')}}" alt=" "
                                     style="width:100%; height: 70%; position: relative; top: 1rem;">
                            </div>
                        </div>
                        <div class="card-title col-md-8">
                            <p id="vext-author">{{trans('postgrade.postg-asist')}}</p>
                            <p id="vext-authort">{{trans('postgrade.postg-atitle')}}</p>
                            <p id="vext-email">{{trans('postgrade.postg-asitmail')}}</p>
                        </div>
                    </div>
                </a>
            </div>
            {{--<div class="d-inline-flex justify-content-around m-4 content-vext">
                --}}{{--Vision--}}{{--
                <div class="links-interest" id="contentimg headingTwo" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                     aria-controls="collapse1">
                    <a id="campusbtn">
                        <img src="{{URL::asset('/image/eye.svg')}}">
                        <span>{{trans('dptoinvestigation.postg-vision-title')}}</span>
                    </a>
                </div>
                --}}{{--Mission--}}{{--
                <div class="links-interest" id="contentimg headingFour" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('/image/target.svg')}}">
                        <span>{{trans('dptoinvestigation.postg-mission-title')}}</span>
                    </a>
                </div>
                --}}{{--functions--}}{{--
                <div class="links-interest" id="contentimg headingThree" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('/image/settings.svg')}}">
                        <span>{{trans('dptoinvestigation.postg-functions')}}</span>
                    </a>
                </div>
                --}}{{--units--}}{{--
                --}}{{-- <div class="links-interest" id="contentimg headingOne" style="background-color: #336699"
                      data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                      aria-controls="collapse3">
                     <a id="campusbtn">
                         <img src="{{URL::asset('./image/unity.svg')}}">
                         <span>{{trans('dptoinvestigation.postg-units')}}</span>
                     </a>
                 </div>--}}{{--
            </div>
            <div class="d-inline-flex justify-content-around m-4 content-vext">
                --}}{{--Encuentro de Saberes--}}{{--
                <div class="links-interest" id="contentimg headingFive" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false"
                     aria-controls="collapse5">
                    <a id="campusbtn">
                        <img src="{{URL::asset('/image/knowledge.png')}}">
                        <span>{{trans('dptoinvestigation.postg-know')}}</span>
                    </a>
                </div>
                --}}{{--<div class="links-interest" id="contentimg headingFive" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/knowledge.png')}}">
                        <span>{{trans('dptoinvestigation.postg-know')}}</span>
                    </a>
                </div>--}}{{--
                --}}{{--Certificaciones--}}{{--
                <div class="links-interest" id="contentimg headingSix" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse6" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('/image/certificade.png')}}">
                        <span>{{trans('dptoinvestigation.postg-certf')}}</span>
                    </a>
                </div>
                --}}{{--Revista Cientifica--}}{{--
                <button class="links-interest" id="contentimg" style="background-color: #336699;"
                        role="button">
                    <a href="https://www.unimarcientifica.edu.ve/revista" id="foundbtn" style="margin: 0 auto">
                        <img src="{{URL::asset('/image/unimarcientif.svg')}}" style="margin: 0 auto;">
                        <span>{{trans('dptoinvestigation.postg-journal')}}</span>
                    </a>
                </button>
            </div>--}}
            <div class="d-inline-flex justify-content-around m-4 content-vext">
                {{--Vision--}}
                <div class="links-interest" id="contentimg" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                     aria-controls="collapse1">
                    <a id="campusbtn">
                        <img src="{{URL::asset('/image/eye.svg')}}">
                        <span>{{trans('postgrade.postg-vision-title')}}</span>
                    </a>
                </div>
                {{--Mission--}}
                <div class="links-interest" id="contentimg" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('/image/target.svg')}}">
                        <span>{{trans('postgrade.postg-mission-title')}}</span>
                    </a>
                </div>
                {{--functions--}}
                <div class="links-interest" id="contentimg headingThree" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('/image/settings.svg')}}">
                        <span>{{trans('postgrade.postg-functions')}}</span>
                    </a>
                </div>
                {{--units--}}
                {{-- <div class="links-interest" id="contentimg headingOne" style="background-color: #336699"
                      data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                      aria-controls="collapse3">
                     <a id="campusbtn">
                         <img src="{{URL::asset('./image/unity.svg')}}">
                         <span>{{trans('dptoinvestigation.postg-units')}}</span>
                     </a>
                 </div>--}}
            </div>
            <div class="d-inline-flex justify-content-around m-4 content-vext">
                {{--Encuentro de Saberes--}}
                <div class="links-interest" id="contentimg" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false"
                     aria-controls="collapse5">
                    <a id="campusbtn">
                        <img src="{{URL::asset('/image/doctor.png')}}">
                        <span>{{trans('postgrade.postg-doctor')}}</span>
                    </a>
                </div>
                {{--<div class="links-interest" id="contentimg headingFive" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/knowledge.png')}}">
                        <span>{{trans('dptoinvestigation.postg-know')}}</span>
                    </a>
                </div>--}}
                {{--Certificaciones--}}
                <div class="links-interest" id="contentimg" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse6" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('/image/master.png')}}">
                        <span>{{trans('postgrade.postg-certf')}}</span>
                    </a>
                </div>
                {{--Revista Cientifica--}}
                <button class="links-interest" id="contentimg" style="background-color: #336699;"
                        role="button">
                    <a href="https://www.unimarcientifica.edu.ve/revista" id="foundbtn" style="margin: 0 auto">
                        <img src="{{URL::asset('/image/specialization.png')}}" style="margin: 0 auto;">
                        <span>{{trans('postgrade.postg-spec')}}</span>
                    </a>
                </button>
            </div>
            <div class="d-inline-flex justify-content-around flex-column m-4" id="contevext">
                <div class="collapse col-lg-12" id="collapse">
                    <div class="card card-body">
                        <p style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('postgrade.postg-vision-title')}}
                        </p>
                        <p> {{trans('postgrade.postg-vision')}}</p>
                    </div>
                </div>
                <div class="collapse col-lg-12" id="collapse2">
                    <div class="card card-body">
                        <p style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('postgrade.postg-functions')}}
                        </p>
                        <ul>
                            <li><p> {{trans('postgrade.postg-functions-1')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-2')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-3')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-4')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-5')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-6')}}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="collapse col-lg-12" id="collapse4">
                    <div class="card card-body">
                        <p style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('postgrade.postg-functions')}}
                        </p>
                        <ul>
                            <li><p> {{trans('postgrade.postg-functions-1')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-2')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-3')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-4')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-5')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-6')}}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="collapse col-lg-12" id="collapse3">
                    <div class="container col-md-12">
                        <p style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('postgrade.postg-units')}}
                        </p>
                        <div class="content-areas">
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#">
                                    <img src="{{URL::asset('.

/image/libraryonline.png')}}">
                                    <span>{{trans('postgrade.postg-biblioc')}}</span>
                                </a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#">
                                    <img src="{{URL::asset('./image/algorithm.svg')}}">
                                    <span>{{trans('postgrade.postg-comcurric')}}</span>
                                </a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="/deans">
                                    <img src="{{URL::asset('./image/insurance.svg')}}">
                                    <span>{{trans('postgrade.postg-deans')}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="content-areas">
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/elearning.png')}}">
                                    <span>{{trans('postgrade.postg-elearning')}}</span></a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#">
                                    <img src="{{URL::asset('./image/lecture.svg')}}">
                                    <span>{{trans('postgrade.postg-prep')}}</span>
                                </a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                                 href="#collapseExample" role="button" aria-expanded="false"
                                 aria-controls="collapseExample">
                                <a id="link-subsystem">
                                    <img src="{{URL::asset('./image/conection.png')}}">
                                    <span>{{trans('postgrade.postg-links')}}</span></a>
                            </div>
                        </div>
                        <div class="content-areas col-md-12" id="contevac">
                            <div class="collapse col-sm-11" id="collapseExample">
                                <div class="content-areas col-12">
                                    <div class="conten-subsytem" style="background-color: #004c9c">
                                        <a id="link-subsystem" href="#"><img
                                                src="{{URL::asset('./image/graduation.svg')}}">
                                            <span>{{trans('postgrade.postg-nva')}}</span></a>
                                    </div>
                                    <div class="conten-subsytem" style="background-color: #004c9c">
                                        <a id="link-subsystem" href="#">
                                            <img src="{{URL::asset('./image/university.svg')}}">
                                            <span>{{trans('postgrade.postg-unesco')}}</span>
                                        </a>
                                    </div>
                                    <div class="conten-subsytem" style="background-color: #004c9c">
                                        <a id="link-subsystem" href="#">
                                            <img src="{{URL::asset('./image/graduation-hat.svg')}}">
                                            <span>{{trans('postgrade.postg-other')}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse col-lg-12" id="collapse5">
                    <div class="card card-body">
                        <p style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('postgrade.postg-functions')}}
                        </p>
                        <ul>
                            <li><p> {{trans('postgrade.postg-functions-1')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-2')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-3')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-4')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-5')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-6')}}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="collapse col-lg-12" id="collapse6">
                    <div class="card card-body">
                        <p style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('postgrade.postg-functions')}}
                        </p>
                        <ul>
                            <li><p> {{trans('postgrade.postg-functions-1')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-2')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-3')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-4')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-5')}}</p></li>
                            <li><p> {{trans('postgrade.postg-functions-6')}}</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="info-dept col-lg-12 card card-body">
                <h5>{{trans('postgrade.postg-info-title')}}</h5>
                <p>
                    <b>{{trans('postgrade.postg-info-etitle')}}</b>&nbsp {{trans('postgrade.postg-info-email')}}
                </p>
                <p>
                    <b>{{trans('postgrade.postg-info-teltit')}}</b>&nbsp{{trans('postgrade.postg-info-telf')}}
                </p>
                <p>
                    <b>{{trans('postgrade.postg-info-schedtit')}}</b>&nbsp{{trans('postgrade.postg-info-sched')}}
                </p>
            </div>
        </div>
    </div>
@endsection

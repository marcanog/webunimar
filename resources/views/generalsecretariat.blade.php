@extends('layouts.layout')

@section ('content')
{{--    <style>--}}
{{--        .d-flex.justify-content-start > span {--}}
{{--            position: relative;--}}
{{--            top: 0.6rem;--}}
{{--            left: 0.7rem;--}}
{{--            color: #FFFFFF;--}}
{{--            font-weight: 700;--}}
{{--            font-size: 0.95em;--}}
{{--            letter-spacing: 0.025em;--}}
{{--            word-wrap: break-word;--}}
{{--            width: 65%;--}}
{{--        }--}}

{{--        p {--}}
{{--            animation-duration: 3s;--}}
{{--            animation-name: slidein;--}}
{{--        }--}}

{{--        @keyframes slidein {--}}
{{--            from {--}}
{{--                margin-left: 100%;--}}
{{--                width: 300%--}}
{{--            }--}}

{{--            to {--}}
{{--                margin-left: 0%;--}}
{{--                width: 100%;--}}
{{--            }--}}
{{--        }--}}

{{--        #cardauthor {--}}
{{--            padding: .5rem;--}}
{{--            height: 215px !important;--}}
{{--        }--}}

{{--        #imgcrd {--}}
{{--            padding: .5rem;--}}
{{--            width: 100%;--}}
{{--        }--}}

{{--        .card-title {--}}
{{--            margin-bottom: .5rem;--}}
{{--            float: right;--}}
{{--            position: relative;--}}
{{--            bottom: 10rem;--}}
{{--        }--}}

{{--        .card-columns {--}}
{{--            -webkit-column-count: 2;--}}
{{--            -moz-column-count: 2;--}}
{{--            column-count: 2;--}}
{{--            -webkit-column-gap: 1.25rem;--}}
{{--            -moz-column-gap: 1.25rem;--}}
{{--            column-gap: 1.25rem;--}}
{{--            margin: 0 auto;--}}
{{--        }--}}

{{--        #imgcard {--}}
{{--            color: #4f4f4f !important;--}}
{{--            font-weight: 600;--}}
{{--        }--}}

{{--        #vext-author {--}}
{{--            font-size: 1.5rem;--}}
{{--        }--}}

{{--        #vext-authort {--}}
{{--            font-size: 1rem;--}}
{{--        }--}}

{{--        #vext-email {--}}
{{--            font-size: .75rem;--}}
{{--        }--}}

{{--        .flex.content-vext {--}}
{{--            justify-content: space-around;--}}
{{--            margin: 1rem 1.3rem;--}}
{{--            padding: 0 1.5rem 1rem 0;--}}
{{--        }--}}

{{--        .col-md-12 #collapse {--}}
{{--            margin: 0 auto;--}}
{{--        }--}}

{{--        .col-sm-11 .card.card-body {--}}
{{--            text-align: justify;--}}
{{--            margin: 1rem auto;--}}
{{--            padding: 2.5rem;--}}
{{--        }--}}

{{--        .card.card-body ul > li {--}}
{{--            list-style: disc;--}}
{{--        }--}}

{{--        .col-sm-11 .card.card-body p + p {--}}
{{--            text-indent: 1.5em;--}}
{{--            margin-top: 0;--}}
{{--        }--}}

{{--        #collapse, #collapse2, #collapse3 {--}}
{{--            margin: 0 auto;--}}
{{--        }--}}

{{--        .info-dept.col-md-10.card.card-body {--}}
{{--            margin: 0 auto;--}}
{{--        }--}}

{{--        .conten-subsytem > a > img {--}}
{{--            display: flex;--}}
{{--            border-top-right-radius: 20px;--}}
{{--            border-top-left-radius: 20px;--}}
{{--            justify-content: space-around;--}}
{{--            width: 60%;--}}
{{--            margin: 0 auto;--}}
{{--            padding: 1rem;--}}
{{--        }--}}

{{--        .conten-subsytem {--}}
{{--            display: flex;--}}
{{--            border-radius: 20px;--}}
{{--            border: 1px solid #c1c1c1;--}}
{{--            width: 20%;--}}
{{--            padding: .5rem;--}}
{{--        }--}}

{{--        #link-subsystem > span {--}}
{{--            display: flex;--}}
{{--            flex: 0 0 25%;--}}
{{--            margin: 1em;--}}
{{--            font-size: 0.95em;--}}
{{--            justify-content: center;--}}
{{--            color: #FFFFFF;--}}
{{--            text-align: center;--}}
{{--        }--}}

{{--        #link-subsystem > span:hover {--}}
{{--            text-decoration: none;--}}
{{--        }--}}

{{--        .links-interest {--}}
{{--            width: 20%;--}}
{{--        }--}}

{{--        .content-areas.col-12 {--}}
{{--            justify-content: space-evenly;--}}
{{--            margin: 0 auto;--}}
{{--        }--}}
{{--    </style>--}}
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/viceacademic.png')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/secretary.png')}}"><span>{{trans('commons.general-secretary')}}</span>
            </div>
        </div>
        <div class="d-flex justify-content-around m-4">
            <div class="card-group">
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded-left" src="{{URL::asset('/image/secretarygeneral/secgeneral.jpg')}}" alt="Secretaria General" style="max-width: 10em;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{trans('secretarygeneral.secretaryofic-author')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('secretarygeneral.secretaryofic-author-title')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('secretarygeneral.secretaryofic-author-email')}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Asistente" style="max-width: 10em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{trans('secretarygeneral.secretaryofic-asist')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('secretarygeneral.secretaryofic-atitle')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('secretarygeneral.secretaryofic-asitmail')}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-inline-flex justify-content-around m-4 content-vext">
            {{--Vision--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                 aria-controls="collapse1">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/secretary.png')}}">
                    <span>{{trans('secretarygeneral.secretaryofic-title')}}</span>
                </a>
            </div>
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/settings.svg')}}">
                    <span>{{trans('secretarygeneral.secretaryofic-functions')}}</span>
                </a>
            </div>
            {{--units ads--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                 aria-controls="collapse4">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/lecture.png')}}">
                    <span>{{trans('secretarygeneral.secretaryofic-depts')}}</span>
                </a>
            </div>
        </div>

        {{--cards bodies--}}
        <div class="d-inline-flex justify-content-around flex-column m-4" id="contevext">
            {{--descripction--}}
            <div class="collapse col-lg-12 m-4" id="collapse">
                <div class="card card-body text-justify sectionbody">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('secretarygeneral.secretaryofic-title')}}
                    </p>
                    <p class="text-justify"> {{trans('secretarygeneral.secretaryofic-obj')}}</p>
                    <p class="text-justify"> {{trans('secretarygeneral.secretaryofic-obj-2')}}</p>
                    <p class="text-justify"> {{trans('secretarygeneral.secretaryofic-obj-3')}}</p>
                    <p class="text-justify"> {{trans('secretarygeneral.secretaryofic-obj-4')}}</p>
                </div>
            </div>
            {{--functions--}}
            <div class="collapse col-lg-12 m-4" id="collapse3">
                <div class="card text-justify card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('secretarygeneral.secretaryofic-functions')}}
                    </p>
                    <ul>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-2')}}</p></li>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-3')}}</p></li>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-4')}}</p></li>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-5')}}</p></li>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-6')}}</p></li>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-7')}}</p></li>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-8')}}</p></li>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-9')}}</p></li>
                    </ul>
                </div>
            </div>
            {{--Departaments--}}
            <div class="collapse col-md-12 m-3 " id="collapse4">
                <div class="container col-md-12">
                    <p class="text-justify" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('vextension.vext-subsystems')}}</p>
                    <div class="content-areas">
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="{{url('/controlstudies')}}">
                                <img src="{{URL::asset('./image/call-agentwhit.svg')}}">
                                <span>{{trans('secretarygeneral.ctrlestudy-title')}}</span>
                            </a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="{{url('/healthystudent')}}">
                                <img src="{{URL::asset('./image/healthy.png')}}">
                                <span>{{trans('secretarygeneral.secretaryofic-healthy')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#">
                                <img src="{{URL::asset('./image/secretario.png')}}">
                                <span>{{trans('secretarygeneral.secretaryofic-docsave')}}</span></a>
                        </div>
                        {{--links interest--}}
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('/image/conection.png')}}">
                                <span>{{trans('vacademy.vacad-links')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            {{--units ads to depts--}}
            <div class="content-areas col-md-12" id="contevac">
                <div class="collapse col-sm-11" id="collapseExample">
                    <div class="content-areas col-12">
                        <div class="conten-subsytem" style="background-color: #004c9c">
                            <a id="link-subsystem" href="#"><img
                                    src="{{URL::asset('/image/procedure.png')}}">
                                <span>{{trans('secretarygeneral.secretaryofic-rules')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #004c9c">
                            <a id="link-subsystem" href="{{url('/healthymental')}}">
                                <img src="{{URL::asset('/image/mental-healthy.png')}}">
                                <span>{{trans('secretarygeneral.secretaryofic-sico')}}</span>
                            </a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #004c9c">
                            <a id="link-subsystem" href="{{url('/healthystudent')}}">
                                <img src="{{URL::asset('/image/social-care.png')}}">
                                <span>{{trans('secretarygeneral.secretaryofic-econ')}}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-dept d-flex m-4 card card-body text-justify">
            <h5>{{trans('postgrade.postg-info-title')}}</h5>
            <p>
                <b>{{trans('secretarygeneral.secretaryofic-info-title')}}</b>&nbsp {{trans('secretarygeneral.secretaryofic-info-email')}}
            </p>
            <p>
                <b>{{trans('secretarygeneral.secretaryofic-info-teltit')}}</b>&nbsp{{trans('secretarygeneral.secretaryofic-info-telf')}}
            </p>
            <p>
                <b>{{trans('secretarygeneral.secretaryofic-info-schedtit')}}</b>&nbsp{{trans('secretarygeneral.secretaryofic-info-sched')}}
            </p>
        </div>

    </div>
@endsection

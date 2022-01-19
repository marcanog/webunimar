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

        .card.card-body ul > li {
            list-style: disc;
        }

        .col-sm-11 .card.card-body p + p {
            text-indent: 1.5em;
            margin-top: 0;
        }

       /* #collapse, #collapse2, #collapse3 {
            margin: 0 auto;
        }*/

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
            <img src="{{URL::asset('/image/banners/es/newstudents.jpg')}}">
        </div>
        {{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('image/logo-unimar.png')}}"><span>{{trans('newstudents.n-title')}}</span>
            </div>
        </div>
        <div class="d-flex text-justify m-4">
            <div class="card">
                <p class="sectionbody">
                    {{trans('newstudents.n-descript')}}
                </p>
            </div>
        </div>
        {{--contents--}}
        <div class="d-inline-flex justify-content-around m-4 content-vext">
            {{--course introduc--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse7" role="button" aria-expanded="false"
                 aria-controls="collapse7">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/student.png')}}">
                    <span>{{trans('newstudents.n-intro')}}</span>
                </a>
            </div>

            {{--Pregrade--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                 aria-controls="collapse1">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/student.png')}}">
                    <span>{{trans('newstudents.n-pregrade')}}</span>
                </a>
            </div>

            {{--Postgrade--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/educationv.png')}}">
                    <span>{{trans('newstudents.n-posgrade')}}</span>
                </a>
            </div>
            {{--equivalentes--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/education.svg')}}">
                    <span>{{trans('newstudents.n-equivalnts')}}</span>
                </a>
            </div>
        </div>
        {{--card bodies--}}
        <div class="justify-content-around m-4" id="contevext">
            <div class="collapse col-md-12 m-4" id="collapse7"> {{--equivalentes--}}
                <div class="card card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('newstudents.n-require')}}&nbsp{{trans('newstudents.n-intro')}}
                    </p>
                    <p>{{trans('newstudents.n-pregrade-desc')}}</p>
                    <div class="sectionbody">
                        <ul>
                            <li><p> {{trans('newstudents.n-requireint')}}</p></li>
                        </ul>
                    </div>
                </div>
                {{--<div class="card card-body mt-4">
                    <div class="sectionbody">
                        <strong>{{trans('newstudents.n-accounts')}}</strong>
                        <ul class="mt-2">
                            <li><p>{{trans('newstudents.n-banks-ac')}}</p></li>
                            <li><p>{{trans('newstudents.n-banks-ac1')}}</p></li>
                            <li><p>{{trans('newstudents.n-titular')}}</p></li>
                        </ul>
                    </div>
                </div>--}}
            </div>
            {{--Pregrade--}}
            <div class="collapse col-md-12" id="collapse">
                <div class="container col-md-12">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('newstudents.n-pregrade')}}</p>
                    <div class="content-areas">
                        <div class="conten-subsytem" style="background-color: #6699cc;" data-toggle="collapse"
                             href="#collapse4" role="button" aria-expanded="false"
                             aria-controls="collapse4">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('image/student.png')}}">
                                <span>{{trans('newstudents.n-br')}}</span>
                            </a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc;" data-toggle="collapse"
                             href="#collapse5" role="button" aria-expanded="false"
                             aria-controls="collapse5">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('image/student.png')}}">
                                <span>{{trans('newstudents.n-lcdo')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc;" data-toggle="collapse"
                             href="#collapse6" role="button" aria-expanded="false"
                             aria-controls="collapse6">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('image/student.png')}}">
                                <span>{{trans('newstudents.n-tecsup')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            {{--info card bodies pregrade--}}
            <div class="justify-content-around m-4 " id="contevac">
                <div class="collapse col-md-12" id="collapse4">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('newstudents.n-require')}}&nbsp{{trans('newstudents.n-br')}}
                    </p>
                    <div class="content-areas col-md-12">
                        <div class="card card-body">
                            <div class="sectionbody">
                                <ul>
                                    <li><p> {{trans('newstudents.n-require-1')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-2')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-3')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-4')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-5')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-6')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-7')}}</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse col-md-12" id="collapse5">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('newstudents.n-require')}}&nbsp{{trans('newstudents.n-lcdo')}}
                    </p>
                    <div class="content-areas col-md-12">
                        <div class="card card-body">
                            <div class="sectionbody">
                                <ul>
                                    <li><p> {{trans('newstudents.n-requirepg-2')}}</p></li>
                                    <li><p> {{trans('newstudents.n-requirepg-3')}}</p></li>
                                    <li><p> {{trans('newstudents.n-requirepg-4')}}</p></li>
                                    <li><p> {{trans('newstudents.n-requirepg-5')}}</p></li>
                                    <li><p> {{trans('newstudents.n-requirepg-6')}}</p></li>
                                    <li><p> {{trans('newstudents.n-requirepg-7')}}</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse col-md-12" id="collapse6">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('newstudents.n-require')}}&nbsp{{trans('newstudents.n-tecsup')}}
                    </p>
                    <div class="content-areas col-md-12">
                        <div class="card card-body">
                            <div class="sectionbody">
                                <ul>
                                    <li><p> {{trans('newstudents.n-requirepg-1')}}</p></li>
                                    <li><p> {{trans('newstudents.n-requirepg-2')}}</p></li>
                                    <li><p> {{trans('newstudents.n-requirepg-3')}}</p></li>
                                    <li><p> {{trans('newstudents.n-requirepg-4')}}</p></li>
                                    <li><p> {{trans('newstudents.n-requirepg-5')}}</p></li>
                                    <li><p> {{trans('newstudents.n-requirepg-6')}}</p></li>
                                    <li><p> {{trans('newstudents.n-requirepg-7')}}</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--Postgrade--}}
            <div class="collapse col-md-12 m-4" id="collapse2">
                <div class="card card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">{{trans('newstudents.n-require')}}&nbsp{{trans('newstudents.n-posgrade')}}</p>
                    <div class="sectionbody">
                        <ul>
                            <li><p> {{trans('newstudents.n-requirepg-1')}}</p></li>
                            <li><p> {{trans('newstudents.n-requirepg-2')}}</p></li>
                            <li><p> {{trans('newstudents.n-requirepg-3')}}</p></li>
                            <li><p> {{trans('newstudents.n-requirepg-4')}}</p></li>
                            <li><p> {{trans('newstudents.n-requirepg-5')}}</p></li>
                            <li><p> {{trans('newstudents.n-requirepg-6')}}</p></li>
                            <li><p> {{trans('newstudents.n-requirepg-7')}}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="card card-body mt-4">
                    <div class="sectionbody">
                        <strong>{{trans('newstudents.n-accounts')}}</strong>
                        <ul class="mt-2">
                            <li><p>{{trans('newstudents.n-banks-ac')}}</p></li>
                            <li><p>{{trans('newstudents.n-titular')}}</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{--equivalentes--}}
            <div class="collapse col-md-12 m-4" id="collapse3"> {{--equivalentes--}}
                <div class="card card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('newstudents.n-require')}}&nbsp{{trans('newstudents.n-equivalnts')}}
                    </p>
                    <p>{{trans('newstudents.n-eq-desc')}}</p>
                    <div class="sectionbody">
                        <ul>
                            <li><p> {{trans('newstudents.n-require-eq2')}}</p></li>
                            <li><p> {{trans('newstudents.n-require-eq3')}}</p></li>
                            <li><p> {{trans('newstudents.n-require-eq4')}}</p></li>
                            <li><p> {{trans('newstudents.n-require-eq5')}}</p></li>
                            <li><p> {{trans('newstudents.n-require-eq6')}}</p></li>
                            <li><p> {{trans('newstudents.n-require-eq7')}}</p></li>
                            <li><p> {{trans('newstudents.n-require-eq8')}}</p></li>
                            <li><p> {{trans('newstudents.n-require-eq9')}}</p></li>
                            <li><p> {{trans('newstudents.n-require-eq10')}}</p></li>
                            <li><p> {{trans('newstudents.n-require-eq11')}}</p></li>
                            <li><p> {{trans('newstudents.n-require-eq12')}}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="card card-body mt-4">
                    <div class="sectionbody">
                        <strong>{{trans('newstudents.n-accounts')}}</strong>
                        <ul class="mt-2">
                            <li><p>{{trans('newstudents.n-banks-ac')}}</p></li>
                            <li><p>{{trans('newstudents.n-banks-ac1')}}</p></li>
                            <li><p>{{trans('newstudents.n-titular')}}</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

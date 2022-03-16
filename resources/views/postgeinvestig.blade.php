@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{asset('./image/nuestrosdecanatos.png')}}">
        </div>
{{--  section title --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('./image/graduate.png')}}"><span>{{trans('postgeinv.title')}}</span>
            </div>
        </div>
{{--  cards presentation --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Directora (E) de Investigación" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{trans('dptoinvestigation.dinvest-author')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('dptoinvestigation.dinvest-author-title')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('dptoinvestigation.dinvest-author-email')}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Decano (E) de Postgrado" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{trans('postgrade.postg-author')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('postgrade.postg-author-title')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('postgrade.postg-author-email')}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        --}}
        <div class="d-inline-flex flex-column justify-content-around m-4">
            <div class="d-inline-flex justify-content-around m-4 content-vext">
                {{--Vision--}}
                <div class="links-interest" id="contentimg headingTwo" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                     aria-controls="collapse1">
                    <a id="campusbtn">
                        <img src="{{URL::asset('/image/eye.svg')}}">
                        <span>{{trans('dptoinvestigation.dinvest-vision-title')}}</span>
                    </a>
                </div>
                {{--Mission--}}
                <div class="links-interest" id="contentimg headingFour" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('/image/target.svg')}}">
                        <span>{{trans('dptoinvestigation.dinvest-mission-title')}}</span>
                    </a>
                </div>
                {{--functions--}}
                <div class="links-interest" id="contentimg headingThree" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('/image/settings.svg')}}">
                        <span>{{trans('dptoinvestigation.dinvest-functions')}}</span>
                    </a>
                </div>
                {{--units--}}
                {{-- <div class="links-interest" id="contentimg headingOne" style="background-color: #336699"
                      data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                      aria-controls="collapse3">
                     <a id="campusbtn">
                         <img src="{{URL::asset('./image/unity.svg')}}">
                         <span>{{trans('dptoinvestigation.dinvest-units')}}</span>
                     </a>
                 </div>--}}
            </div>
            <div class="d-inline-flex justify-content-around m-4 content-vext">
                {{--Encuentro de Saberes--}}
                <div class="links-interest" id="contentimg headingFive" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false"
                     aria-controls="collapse5">
                    <a id="campusbtn">
                        <img src="{{URL::asset('/image/knowledge.png')}}">
                        <span>{{trans('dptoinvestigation.dinvest-know')}}</span>
                    </a>
                </div>
                {{--<div class="links-interest" id="contentimg headingFive" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/knowledge.png')}}">
                        <span>{{trans('dptoinvestigation.dinvest-know')}}</span>
                    </a>
                </div>--}}
                {{--Certificaciones--}}
                <div class="links-interest" id="contentimg headingSix" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse6" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('/image/certificade.png')}}">
                        <span>{{trans('dptoinvestigation.dinvest-certf')}}</span>
                    </a>
                </div>
                {{--Revista Cientifica--}}
                <button class="links-interest" id="contentimg" style="background-color: #336699;"
                        role="button">
                    <a href="https://www.unimarcientifica.edu.ve/revista" id="foundbtn" style="margin: 0 auto">
                        <img src="{{URL::asset('/image/unimarcientif.svg')}}" style="margin: 0 auto;">
                        <span>{{trans('dptoinvestigation.dinvest-journal')}}</span>
                    </a>
                </button>
            </div>
            <div class="d-inline-flex justify-content-around flex-column m-4" id="contevext">
                <div class="collapse col-lg-12 m-4" id="collapse">
                    <div class="card card-body">
                        <p class="text-left"  style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('dptoinvestigation.dinvest-vision-title')}}
                        </p>
                        <div class="sectionbody">
                            <p class="text-justify"> {{trans('dptoinvestigation.dinvest-vision')}}</p>
                        </div>
                    </div>
                </div>
                <div class="collapse col-lg-12 m-4" id="collapse2">
                    <div class="card card-body">
                        <p class="text-left" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('dptoinvestigation.dinvest-functions')}}
                        </p>
                        <ul class="text-justify">
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-1')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-2')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-3')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-4')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-5')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-6')}}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="collapse col-lg-12 m-4" id="collapse4">
                    <div class="card card-body">
                        <p class="text-left" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('dptoinvestigation.dinvest-functions')}}
                        </p>
                        <ul class="text-justify">
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-1')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-2')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-3')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-4')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-5')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-6')}}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="collapse col-lg-12" id="collapse3">
                    <div class="container col-md-12">
                        <p class="text-left"  style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('dptoinvestigation.dinvest-units')}}
                        </p>
                        <div class="content-areas">
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#">
                                    <img src="{{URL::asset('./image/libraryonline.png')}}">
                                    <span>{{trans('dptoinvestigation.dinvest-biblioc')}}</span>
                                </a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#">
                                    <img src="{{URL::asset('./image/algorithm.svg')}}">
                                    <span>{{trans('dptoinvestigation.dinvest-comcurric')}}</span>
                                </a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="/deans">
                                    <img src="{{URL::asset('./image/insurance.svg')}}">
                                    <span>{{trans('dptoinvestigation.dinvest-deans')}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="content-areas">
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/elearning.png')}}">
                                    <span>{{trans('dptoinvestigation.dinvest-elearning')}}</span></a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#">
                                    <img src="{{URL::asset('./image/lecture.svg')}}">
                                    <span>{{trans('dptoinvestigation.dinvest-prep')}}</span>
                                </a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                                 href="#collapseExample" role="button" aria-expanded="false"
                                 aria-controls="collapseExample">
                                <a id="link-subsystem">
                                    <img src="{{URL::asset('./image/conection.png')}}">
                                    <span>{{trans('dptoinvestigation.dinvest-links')}}</span></a>
                            </div>
                        </div>
                        <div class="content-areas col-md-12" id="contevac">
                            <div class="collapse col-sm-11" id="collapseExample">
                                <div class="content-areas col-12">
                                    <div class="conten-subsytem" style="background-color: #004c9c">
                                        <a id="link-subsystem" href="#"><img
                                                src="{{URL::asset('./image/graduation.svg')}}">
                                            <span>{{trans('dptoinvestigation.dinvest-nva')}}</span></a>
                                    </div>
                                    <div class="conten-subsytem" style="background-color: #004c9c">
                                        <a id="link-subsystem" href="#">
                                            <img src="{{URL::asset('./image/university.svg')}}">
                                            <span>{{trans('dptoinvestigation.dinvest-unesco')}}</span>
                                        </a>
                                    </div>
                                    <div class="conten-subsytem" style="background-color: #004c9c">
                                        <a id="link-subsystem" href="#">
                                            <img src="{{URL::asset('./image/graduation-hat.svg')}}">
                                            <span>{{trans('dptoinvestigation.dinvest-other')}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse col-lg-12" id="collapse5">
                    <div class="card card-body">
                        <p class="text-left" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('dptoinvestigation.dinvest-functions')}}
                        </p>
                        <ul class="text-justify">
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-1')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-2')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-3')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-4')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-5')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-6')}}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="collapse col-lg-12" id="collapse6">
                    <div class="card card-body">
                        <p class="text-left" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('dptoinvestigation.dinvest-functions')}}
                        </p>
                        <ul class="text-justify">
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-1')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-2')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-3')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-4')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-5')}}</p></li>
                            <li><p> {{trans('dptoinvestigation.dinvest-functions-6')}}</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="info-dept col-lg-12 card card-body text-left">
                <h5>{{trans('dptoinvestigation.dinvest-info-title')}}</h5>
                <p>
                    <b>{{trans('dptoinvestigation.dinvest-info-etitle')}}</b>&nbsp {{trans('dptoinvestigation.dinvest-info-email')}}
                </p>
                <p>
                    <b>{{trans('dptoinvestigation.dinvest-info-teltit')}}</b>&nbsp{{trans('dptoinvestigation.dinvest-info-telf')}}
                </p>
                <p>
                    <b>{{trans('dptoinvestigation.dinvest-info-schedtit')}}</b>&nbsp{{trans('dptoinvestigation.dinvest-info-sched')}}
                </p>
            </div>
        </div>
    </div>
@endsection

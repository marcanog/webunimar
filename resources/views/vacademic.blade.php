@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{asset('./image/banners/es/vacademics.png')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/graduate.png')}}"><span>{{trans('vacademy.vacad-title')}}</span>
            </div>
        </div>
        <div class="content">
            {{--  cards presentation --}}
            <div class="d-flex justify-content-around flex-column">
                <div class="card-group">
                    <div class="card m-4">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img class="rounded-left" src="{{URL::asset('/image/csuperior/antoniomartinez.jpg')}}" alt="Vicerrector Académico" style="max-width: 8em; height: 10.75em; background-color: #336699;">
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
                                <img class="rounded-left" src="{{URL::asset('/image/asistents/asistenteviceacadem.jpg')}}" alt="Secretaria Vicerrectorado Académico" style="max-width: 8em; height: 10.75em; background-color: #336699;">
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
            <div class="d-flex justify-content-around content-vext">
                <div class="links-interest" id="contentimg" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
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
                <div class="links-interest" id="contentimg" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse" role="button"
                     aria-expanded="false"
                     aria-controls="collapse3">
                    <a id="campusbtn">
                        <img src="{{URL::asset('/image/flow-chart.svg')}}">
                        <span>{{trans('vacademy.vacad-struct')}}</span>
                    </a>
                </div>
                {{--fin struct--}}
            </div>
{{--            <div class="m-4" id="contevext">--}}
                {{--<div class="collapse col-sm-11" id="collapse">
                    <div class="card card-body">
                        <p style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('vextension.vext-mision-title')}}
                        </p>
                        <p> {{trans('vacademy.vacad-mission')}}</p>
                    </div>
                </div>--}}
                <div class="collapse m-4 text-justify" id="collapse2">
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
                <div class="collapse m-4" id="collapse3">
                    <div class="card-body">
                        <p class="text-justify" style="font-size: 1.25rem; font-weight: 600;">
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
                <div class="collapse m-4" id="collapse">
                    <div class="content">
                        @include('components.vacademicstructure')
                    </div>
                </div>
            </div>
{{--        </div>--}}
        <div class="d-flex justify-content-around m-4 text-left card card-body">
            <h5>{{trans('vacademy.vacad-info-title')}}</h5>
            <p><b>{{trans('vacademy.vacad-info-etitle')}}</b>&nbsp {{trans('vacademy.vacad-info-email')}}</p>
            <p><b>{{trans('vacademy.vacad-info-teltit')}}</b>&nbsp{{trans('vacademy.vacad-info-telf')}}</p>
            <p><b>{{trans('vacademy.vacad-info-schedtit')}}</b>&nbsp{{trans('vacademy.vacad-info-sched')}}</p>
        </div>
    </div>
@endsection

@extends('layouts.layout')

@section('content')
    <div class="content">
{{--        Main Banner --}}
        <div class="banner-main">
            <img src="{{asset('./image/banners/es/vicextension.jpg')}}">
        </div>
{{--        Section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('./image/graduate.png')}}"><span
                    style="font-size: 0.84rem;">{{trans('vextension.vext-title')}}</span>
            </div>
        </div>
        <p>
        <div class="content">
{{--            Cards presentation --}}
            <div class="d-flex justify-content-around flex-column">
                <div class="card-group">
                    <div class="card m-4">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img class="rounded-left" src="{{URL::asset('/image/csuperior/thamaraechegaray.jpg')}}" alt="Vicerrectora de Extensión" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title">{{trans('vextension.vext-author')}}</h3>
                                    <p class="card-text font-weight-bold">{{trans('vextension.vext-author-title')}}</p>
                                    <p class="card-text"><small class="text-muted">{{trans('vextension.vext-mail')}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-4">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Asistente Vicerrectorado Extensión" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title">{{trans('vextension.vext-asist')}}</h3>
                                    <p class="card-text font-weight-bold">{{trans('vextension.vext-atitle')}}</p>
                                    <p class="card-text"><small class="text-muted">{{trans('vextension.vext-asitmail')}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{-- Content information --}}
            <div class="d-flex justify-content-around content-vext m-4">
                <div class="links-interest" id="contentimg" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                     aria-controls="collapse">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/target.svg')}}">
                        <span>{{trans('vextension.vext-mission-title')}}</span></a>
                </div>
                <div class="links-interest" id="contentimg" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/settings.svg')}}">
                        <span>{{trans('vextension.vext-functions')}}</span></a>
                </div>
                <div class="links-interest" id="contentimg" style="background-color: #336699"
                     data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                     aria-controls="collapse3">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/organization.png')}}">
                        <span>{{trans('vextension.vext-subsystems')}}</span></a>
                </div>
            </div>
            <div class="d-flex flex-column justify-content-around" id="contevext">
                <div class="collapse m-4" id="collapse">
                    <div class="card card-body text-justify">
                        <p style="font-size: 1.25rem; font-weight: 600;">{{trans('vextension.vext-mission-title')}}</p>
                        <p> {{trans('vextension.vext-mission')}}</p>
                    </div>
                </div>
                <div class="collapse m-4" id="collapse2">
                    <div class="card card-body text-justify">
                        <p style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('vextension.vext-functions')}}
                        </p>
                        <ul>
                            <li><p> {{trans('vextension.vext-functions-1')}}</p></li>
                            <li><p> {{trans('vextension.vext-functions-2')}}</p></li>
                            <li><p> {{trans('vextension.vext-functions-3')}}</p></li>
                            <li><p> {{trans('vextension.vext-functions-4')}}</p></li>
                            <li><p> {{trans('vextension.vext-functions-5')}}</p></li>
                            <li><p> {{trans('vextension.vext-functions-6')}}</p></li>
                            <li><p> {{trans('vextension.vext-functions-7')}}</p></li>
                            <li><p> {{trans('vextension.vext-functions-8')}}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="collapse m-4" id="collapse3">
                    <div class="card-body m-4">
                        <p class="text-justify" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('vextension.vext-subsystems')}}</p>
                        <div class="content-areas">
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="{{url('/communityserv')}}"><img src="{{URL::asset('./image/social-care.png')}}">
                                    <span>{{trans('vextension.vext-servcomuny')}}</span></a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#">
                                    <img src="{{URL::asset('./image/presentation.svg')}}">
                                    <span>{{trans('vextension.vext-educperm')}}</span>
                                </a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/first-aid-kit.svg')}}">
                                    <span>{{trans('vextension.vext-ceu')}}</span></a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/sports.svg')}}">
                                    <span>{{trans('vextension.vext-sports')}}</span></a>
                            </div>
                        </div>
                        <div class="content-areas">
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#">
                                    <img src="{{URL::asset('./image/project.svg')}}">
                                    <span>{{trans('vextension.vext-sproj')}}</span>
                                </a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/history.svg')}}">
                                    <span>{{trans('vextension.vext-culture')}}</span></a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/smartphone.png')}}">
                                    <span>{{trans('vextension.vext-prom')}}</span></a>
                            </div>
                            <div class="conten-subsytem" style="background-color: #6699cc">
                                <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/listening.png')}}">
                                    <span>{{trans('vextension.vext-uniradio')}}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex m-4 card card-body text-left">
            <h5>{{trans('vextension.vext-info-title')}}</h5>
            <p><b>{{trans('vextension.vext-info-etitle')}}</b>&nbsp {{trans('vextension.vext-info-email')}}</p>
            <p><b>{{trans('vextension.vext-info-teltit')}}</b>&nbsp{{trans('vextension.vext-info-telf')}}</p>
            <p><b>{{trans('vextension.vext-info-schedtit')}}</b>&nbsp{{trans('vextension.vext-info-sched')}}</p>
        </div>
    </div>
@endsection

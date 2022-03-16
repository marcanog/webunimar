@extends('layouts.layout')

@section ('content')
<div class="content">
{{-- main banner --}}
    <div class="banner-main">
        <img src="{{URL::asset('./image/engineerie.png')}}">
    </div>
{{--    section ID --}}
   <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section" src="{{URL::asset('./image/graduate.png')}}"><span>{{trans('engineering.deaneng-section')}}</span>
        </div>
    </div>
    <!-- Information depto -->
{{--        cards presentations --}}
        <div class="d-flex justify-content-around m-4">
            <div class="card-group">
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded-left" src="{{URL::asset('/image/ingeeniering/decaingenieria.jpg')}}" alt="Decano Ingeniería y Afines" style="max-width: 8em; height: 12.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{trans('engineering.deaneng-author')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('engineering.deaneng-author-title')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('engineering.deaneng-author-mail')}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded-left" src="{{URL::asset('/image/ingeeniering/asistingenieria.jpg')}}" alt="Secretaria Ingeniería y Afines" style="max-width: 8em; height: 12.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{trans('engineering.deaneng-asist')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('engineering.deaneng-asist-title')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('engineering.deaneng-asist-mail')}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        content information --}}
        <div class="d-flex justify-content-around content-vext">
            <div class="links-interest" id="contentimg" style="background-color: #336699" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                <a id="foundbtn">
                <img src="{{URL::asset('./image/target.svg')}}">
                <span>{{trans('engineering.deaneng-mission-title')}}</span></a>
            </div>
            <div class="links-interest" id="contentimg" style="background-color: #336699" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                <a id="campusbtn">
                <img src="{{URL::asset('./image/settings.svg')}}">
                <span>{{trans('engineering.deaneng-functions')}}</span></a>
            </div>
            <div class="links-interest" id="contentimg" style="background-color: #336699" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                <a id="campusbtn">
                <img src="{{URL::asset('./image/organization.png')}}">
                <span>{{trans('engineering.deaneng-subsystems')}}</span></a>
            </div>
        </div>
        <div class="d-inline-flex flex-column justify-content-around" id="contevext">
            <div class="collapse m-4" id="collapse">
                <div class="card card-body text-justify">
                    <p style="font-size: 1.25rem; font-weight: 600;">{{trans('engineering.deaneng-mission-title')}}</p>
                    <p> {{trans('engineering.daeneng-mission-1')}}</p>
                    <p> {{trans('engineering.daeneng-mission-2')}}</p>
                    <p> {{trans('engineering.daeneng-mission-3')}}</p>
                </div>
            </div>
            <div class="collapse m-4" id="collapse2">
                <div class="card card-body text-justify">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('engineering.deaneng-functions')}}
                    </p>
                    <ul>
                        <li><p> {{trans('engineering.deaneng-functions-1')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-3')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-4')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-2')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-5')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-6')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-7')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-8')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-9')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-10')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-11')}}</p></li>
                    </ul>
                </div>
            </div>
           <div class="collapse" id="collapse3">
                <div class="container col-md-12">
                    <p class="text-justify" style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('engineering.deaneng-subsystems')}}</p>
                    <div class="content-areas">
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">
                                <img src="{{URL::asset('./image/analisys.png')}}">
                                <span>{{trans('engineering.deaneng-invpas')}}</span>
                            </a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/curse-online.png')}}">
                            <span>{{trans('engineering.deaneng-pev')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/cst.png')}}">
                            <span>{{trans('engineering.deaneng-cst')}}</span></a>
                        </div>
{{--                        <div class="conten-subsytem" style="background-color: #6699cc">--}}
{{--                            <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/smartphone.png')}}">--}}
{{--                            <span>{{trans('vextension.vext-prom')}}</span></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>


        </div>
        <div class="d-flex justify-content-around content-vext">
            <div class="collapse m-4" id="collapse4">
{{--                <div class="card card-body">--}}
{{--                </div>--}}
                <div class="d-flex justify-content-around">
                    <div class="card-group">
                        <div class="card m-4">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Coord Psantías e Investigación Ingeniería y Afines" style="max-width: 8em; height: 12.25em; background-color: #336699;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title">{{trans('engineering.deaneng-coord')}}</h3>
                                        <p class="card-text font-weight-bold">{{trans('engineering.deaneng-coord-title')}}</p>
                                        <p class="card-text"><small class="text-muted">{{trans('engineering.deaneng-coord-mail')}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-4 invisible">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Coord Psantías e Investigación Ingeniería y Afines" style="max-width: 8em; height: 12.25em; background-color: #336699;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title">{{trans('engineering.deaneng-coord')}}</h3>
                                        <p class="card-text font-weight-bold">{{trans('engineering.deaneng-coord-title')}}</p>
                                        <p class="card-text"><small class="text-muted">{{trans('engineering.deaneng-coord-mail')}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around m-4 text-left card card-body">
        <h5>{{trans('engineering.deaneng-info-title')}}</h5>
        <p><b>{{trans('engineering.deaneng-info-etitle')}}</b>&nbsp {{trans('engineering.deaneng-info-email')}}</p>
        <p><b>{{trans('engineering.deaneng-info-teltit')}}</b>&nbsp{{trans('engineering.deaneng-info-telf')}}</p>
        <p><b>{{trans('engineering.deaneng-info-schedtit')}}</b>&nbsp{{trans('engineering.deaneng-info-sched')}}</p>
    </div>
@endsection

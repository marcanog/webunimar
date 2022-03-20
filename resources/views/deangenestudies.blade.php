@extends('layouts.layout')

@section ('content')
    <div class="content">
        {{-- main banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/es/studiesgnrals.jpg')}}">
        </div>
        {{--    section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/graduate.png')}}"><span>{{trans('estgen.title')}}</span>
            </div>
        </div>
        <!-- Information depto -->
        {{--        cards presentations --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded-left" src="{{URL::asset('/image/estgen/decaestudiosgenerales.jpg')}}" alt="{{trans('estgen.chief-role')}}" style="max-width: 8em; height: 12.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{trans('estgen.chief-name')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('estgen.chief-role')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('estgen.chief-email')}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            {{--                            <img class="rounded-left" src="{{URL::asset('/image/ingeeniering/asistingenieria.jpg')}}" alt="Secretaria Ingeniería y Afines" style="max-width: 8em; height: 12.25em; background-color: #336699;">--}}
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('estgen.asist-role')}}" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{trans('estgen.asist-name')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('estgen.asist-role')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('estgen.asist-email')}}</small></p>
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
                    <img src="{{URL::asset('./image/reporte.png')}}">
                    <span>{{trans('estgen.resume-title')}}</span></a>
            </div>
            <div class="links-interest" id="contentimg" style="background-color: #336699" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                <a id="campusbtn">
                    <img src="{{URL::asset('./image/perfil-est.png')}}">
                    <span>{{trans('estgen.perfil-title')}}</span></a>
            </div>

        </div>
        <div class="d-flex flex-column justify-content-around" id="contevext">
            <div class="collapse m-4" id="collapse">
                <div class="card card-body text-justify">
                    <p style="font-size: 1.25rem; font-weight: 600;">{{trans('estgen.resume-title')}}</p>
                    <p> {{trans('estgen.resume')}}</p>
                </div>
            </div>
            <div class="collapse m-4" id="collapse2">
                <div class="card card-body text-justify">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('estgen.perfil-title')}}
                    </p>
                    <p> {{trans('estgen.student-perfil-1')}}</p>
                    <ul>
                        <li><p> {{trans('estgen.student-perfil-2')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-3')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-4')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-5')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-6')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-7')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-8')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-9')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-10')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-11')}}</p></li>
                    </ul>
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

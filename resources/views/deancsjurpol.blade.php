@extends('layouts.layout')

@section ('content')
    <div class="content">
        {{-- main banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/es/cjyp.png')}}">
        </div>
        {{--    section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/graduate.png')}}"><span>{{trans('cjyp.title')}}</span>
            </div>
        </div>
        <!-- Information depto -->
        {{--        cards presentations --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded-left" src="{{URL::asset('/image/cjyp/decaderecho.jpg')}}" alt="{{trans('cjyp.chief-role')}}" style="max-width: 8em; height: 12em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{trans('cjyp.chief-name')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('cjyp.chief-role')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('cjyp.chief-mail')}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('cjyp.asist-role')}}" style="max-width: 8em; height: 12em; background-color: #336699;">
{{--                            <img class="rounded-left" src="{{URL::asset('/image/ingeeniering/asistingenieria.jpg')}}" alt="Secretaria Ingeniería y Afines" style="max-width: 8em; height: 12.25em; background-color: #336699;">--}}
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{trans('cjyp.asist-name')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('cjyp.asist-role')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('cjyp.asist-mail')}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  content information --}}
        {{--    mision    --}}
        <div class="d-flex justify-content-around content-vext">
            <div class="links-interest" id="contentimg" style="background-color: #336699" data-toggle="collapse"
                 href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                <a id="foundbtn">
                    <img src="{{URL::asset('./image/target.svg')}}">
                    <span>{{trans('cjyp.cjyp-mission-title')}}</span></a>
            </div>
        {{--  Objetivos --}}
            <div class="links-interest" id="contentimg" style="background-color: #336699" data-toggle="collapse"
                 href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                <a id="campusbtn">
                    <img src="{{URL::asset('./image/eye.svg')}}">
                    <span>{{trans('cjyp.cjyp-vision-title')}}</span></a>
            </div>
        {{-- Departamentos --}}
            <div class="links-interest" id="contentimg" style="background-color: #336699" data-toggle="collapse"
                 href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                <a id="campusbtn">
                    <img src="{{URL::asset('./image/objetive.png')}}">
                    <span>{{trans('cjyp.cjyp-obj-title')}}</span></a>
            </div>
            <div class="links-interest" id="contentimg" style="background-color: #336699" data-toggle="collapse"
                 href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse3">
                <a id="campusbtn">
                    <img src="{{URL::asset('./image/eticsprinc.png')}}">
                    <span>{{trans('cjyp.cjyp-etics-title')}}</span></a>
            </div>
            <div class="links-interest" id="contentimg" style="background-color: #336699" data-toggle="collapse"
                 href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse3">
                <a id="campusbtn">
                    <img src="{{URL::asset('./image/analisys.png')}}">
                    <span>{{trans('cjyp.cjyp-subsystems')}}</span></a>
            </div>
        </div>
        <div class="d-inline-flex flex-column justify-content-around" id="contevext">
            <div class="collapse m-4" id="collapse">
                <div class="card card-body text-justify">
                    <p style="font-size: 1.25rem; font-weight: 600;">{{trans('engineering.deaneng-mission-title')}}</p>
                    <p> {{trans('cjyp.cjyp-mission')}}</p>
                </div>
            </div>
            <div class="collapse m-4" id="collapse2">
                <div class="card card-body text-justify">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('cjyp.cjyp-vision-title')}}
                    </p>
                    <ul>
                        <li><p> {{trans('cjyp.cjyp-vision')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="collapse m-4" id="collapse3">
                <div class="card card-body text-justify">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('cjyp.cjyp-obj-title')}}
                    </p>
                    <ul>
                        <li><p> {{trans('cjyp.cjyp-obj-1')}}</p></li>
                        <li><p> {{trans('cjyp.cjyp-obj-2')}}</p></li>
                        <li><p> {{trans('cjyp.cjyp-obj-3')}}</p></li>
                        <li><p> {{trans('cjyp.cjyp-obj-4')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="collapse m-4" id="collapse4">
                <div class="card card-body text-justify">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('cjyp.cjyp-etics-title')}}
                    </p>
                    <ul>
                        <li><p> {{trans('cjyp.cjyp-etics-1')}}</p></li>
                        <li><p> {{trans('cjyp.cjyp-etics-2')}}</p></li>
                        <li><p> {{trans('cjyp.cjyp-etics-3')}}</p></li>
                        <li><p> {{trans('cjyp.cjyp-etics-4')}}</p></li>
                        <li><p> {{trans('cjyp.cjyp-etics-5')}}</p></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-around content-vext">
            <div class="collapse m-4" id="collapse5">
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
                                        <h3 class="card-title">{{trans('cjyp.coord-name')}}</h3>
                                        <p class="card-text font-weight-bold">{{trans('cjyp.coordgrade')}}</p>
                                        <p class="card-text"><small class="text-muted">{{trans('cjyp.coord-mail')}}</small></p>
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
        <h5>{{trans('cjyp.cjyp-info')}}</h5>
        <p><b>{{trans('cjyp.cjyp-mail-title')}}</b>&nbsp {{trans('cjyp.cjyp-mail')}}</p>
        <p><b>{{trans('cjyp.cjyp-telf-title')}}</b>&nbsp{{trans('cjyp.cjyp-telf')}}</p>
        <p><b>{{trans('cjyp.cjyp-sched-title')}}</b>&nbsp{{trans('cjyp.cjyp-sched')}}</p>
    </div>
@endsection

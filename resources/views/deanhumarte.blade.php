@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/es/humarte.png')}}">
        </div>
        {{-- section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}"><span style="top: 0.5em;">{{trans('humarte.title')}}</span>
            </div>
        </div>
        <!-- Information depto -->
        {{--        cards presentations --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded-left" src="{{URL::asset('/image/humarte/decahumarte.jpg')}}" alt="{{trans('humarte.chief-role')}}" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{trans('humarte.chief-name')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('humarte.chief-role')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('humarte.chief-mail')}}</small></p>
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
                                <h3 class="card-title">{{trans('humarte.asist-name')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('humarte.asist-role')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('humarte.asist-mail')}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        content information --}}
        <div class="d-flex text-justify m-4">
        <div class="card">
            <p class="sectionbody">
                {{trans('humarte.hum-descript')}}
            </p>
        </div>
    </div>
        <div class="d-flex justify-content-around content-vext">
            <div class="links-interest" id="contentimg" style="background-color: #336699" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                <a id="foundbtn">
                    <img src="{{URL::asset('./image/graduate.png')}}">
                    <span>{{trans('humarte.hum-educ-title')}}</span></a>
            </div>
            <div class="links-interest" id="contentimg" style="background-color: #336699" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                <a id="campusbtn">
                    <img src="{{URL::asset('./image/graduate.png')}}">
                    <span>{{trans('humarte.hum-art-title')}}</span></a>
            </div>
            <div class="links-interest" id="contentimg" style="background-color: #336699" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                <a id="campusbtn">
                    <img src="{{URL::asset('./image/graduate.png')}}">
                    <span>{{trans('humarte.hum-modern-title')}}</span></a>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around" id="contevext">
            <div class="collapse m-4" id="collapse">
                <div class="card card-body text-justify">
                    <p style="font-size: 1.25rem; font-weight: 600;">{{trans('humarte.hum-educ-title')}}</p>
                    <ul>
                        <li><p> {{trans('humarte.hum-educ-1')}}</p></li>
                        <li><p> {{trans('humarte.hum-educ-2')}}</p></li>
                        <li><p> {{trans('humarte.hum-educ-3')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="collapse m-4" id="collapse2">
                <div class="card card-body text-justify">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('humarte.hum-art-title')}}
                    </p>
                    <ul>
                        <li><p> {{trans('humarte.hum-arte-1')}}</p></li>
                        <li><p> {{trans('humarte.hum-arte-2')}}</p></li>
                        <li><p> {{trans('humarte.hum-arte-3')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="collapse m-4" id="collapse3">
                <div class="card card-body text-justify">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('humarte.hum-modern-title')}}
                    </p>
                    <ul>
                        <li><p> {{trans('humarte.hum-modern-1')}}</p></li>
                        <li><p> {{trans('humarte.hum-modern-2')}}</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around m-4 text-left card card-body">
        <h5>{{trans('engineering.deaneng-info-title')}}</h5>
        <p><b>{{trans('engineering.deaneng-info-etitle')}}</b>&nbsp {{trans('humarte.hum-mail')}}</p>
        <p><b>{{trans('engineering.deaneng-info-teltit')}}</b>&nbsp{{trans('engineering.deaneng-info-telf')}}</p>
        <p><b>{{trans('engineering.deaneng-info-schedtit')}}</b>&nbsp{{trans('engineering.deaneng-info-sched')}}</p>
    </div>
    </div>
@endsection

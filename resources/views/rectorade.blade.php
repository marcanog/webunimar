@extends('layouts.layout')

@section ('content')
<div class="content">
{{--        banners --}}
    <div class="banner-main">
        <img src="{{URL::asset('/image/banners/es/rector_office.png')}}">
    </div>
{{--        section --}}
    <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section"
                 src="{{URL::asset('/image/secretary.png')}}"><span>{{trans('commons.rectorade')}}</span>
        </div>
    </div>
{{--        cards presentation --}}
    <div class="d-flex justify-content-around m-4">
        <div class="card-group">
            <div class="card m-4">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="rounded-left" src="{{URL::asset('/image/csuperior/antonietarosales.jpg')}}" alt="Rector(a)" style="max-width: 8em;height: 10.75em;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">{{trans('rectorade.rector-name')}}</h3>
                            <p class="card-text font-weight-bold">{{trans('rectorade.rector-charge')}}</p>
                            <p class="card-text"><small class="text-muted">{{trans('rectorade.rector-email')}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-4">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Adjunto Rectorado" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">{{trans('rectorade.rector-asist')}}</h3>
                            <p class="card-text font-weight-bold">{{trans('rectorade.rector-asist-charge')}}</p>
                            <p class="card-text"><small class="text-muted">{{trans('rectorade.rector-asist-email')}}</small></p>
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
                <span>{{trans('rectorade.rector-welcome')}}</span>
            </a>
        </div>
        <div class="links-interest" id="contentimg" style="background-color: #336699"
             data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
             aria-controls="collapse2">
            <a id="foundbtn">
                <img src="{{URL::asset('/image/settings.svg')}}">
                <span>{{trans('rectorade.rector-functions-title')}}</span>
            </a>
        </div>
        {{--units ads--}}
        <div class="links-interest" id="contentimg" style="background-color: #336699"
             data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
             aria-controls="collapse4">
            <a id="campusbtn">
                <img src="{{URL::asset('/image/lecture.png')}}">
                <span>{{trans('rectorade.rector-deptos')}}</span>
            </a>
        </div>
    </div>

    {{--cards bodies--}}
    <div class="d-inline-flex justify-content-around flex-column m-4" id="contevext">
        {{--descripction--}}
        <div class="collapse" id="collapse">
            <div class="card card-body sectionbody">
                <p style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('rectorade.rector-welcome')}}
                </p>
                <p class="text-justify"> {{trans('rectorade.rector-letter')}}</p>
            </div>
        </div>
        {{--functions--}}
        <div class="collapse" id="collapse3">
            <div class="card card-body text-justify">
                <p style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('rectorade.rector-functions-title')}}
                </p>
                <ul>
                    <li><p> {{trans('rectorade.rector-functions-1')}}</p></li>
                    <li><p> {{trans('rectorade.rector-functions-2')}}</p></li>
                    <li><p> {{trans('rectorade.rector-functions-3')}}</p></li>
                </ul>
            </div>
        </div>
        {{--Departaments--}}
        <div class="collapse" id="collapse4">
            <div class="container">
                <p class="card-body text-justify" style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('rectorade.rector-deptos')}}</p>
                <div class="content-areas">
                    <div class="conten-subsytem" style="background-color: #6699cc">
                        <a id="link-subsystem" href="{{url('')}}">
                            <img src="{{URL::asset('./image/call-agentwhit.svg')}}">
                            <span>{{trans('rectorade.rector-deptos-1')}}</span>
                        </a>
                    </div>
                    <div class="conten-subsytem" style="background-color: #6699cc">
                        <a id="link-subsystem" href="{{url('/rrhh')}}">
                            <img src="{{URL::asset('./image/healthy.png')}}">
                            <span>{{trans('rectorade.rector-deptos-2')}}</span></a>
                    </div>
                    <div class="conten-subsytem" style="background-color: #6699cc">
                        <a id="link-subsystem" href="#">
                            <img src="{{URL::asset('./image/secretario.png')}}">
                            <span>{{trans('rectorade.rector-deptos-3')}}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-dept d-flex m-4 text-justify card card-body">
        <h5>{{trans('rectorade.rector-info')}}</h5>
        <p>
            <b>{{trans('rectorade.rector-email-title')}}</b>&nbsp {{trans('rectorade.rector-email')}}
        </p>
        <p>
            <b>{{trans('rectorade.rector-telf-title')}}</b>&nbsp{{trans('rectorade.rector-telf')}}
        </p>
        <p>
            <b>{{trans('rectorade.rector-schedule-title')}}</b>&nbsp{{trans('rectorade.rector-schedule')}}
        </p>
    </div>

</div>
@endsection

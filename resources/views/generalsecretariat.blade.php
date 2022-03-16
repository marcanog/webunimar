@extends('layouts.layout')

@section ('content')
    <div class="content">
{{--        banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/es/secretariat.png')}}">
        </div>
{{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/secretary.png')}}"><span>{{trans('commons.general-secretary')}}</span>
            </div>
        </div>
{{--        presentations cards --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded-left" src="{{URL::asset('/image/secretarygeneral/secgeneral.jpg')}}" alt="Secretaria General" style="max-width: 8em;height: 10.75em;">
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
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Asistente" style="max-width: 8em; height: 10.75em; background-color: #336699;">
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
{{--        content information --}}
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
                    <img src="{{URL::asset('/image/organization.png')}}">
                    <span>{{trans('secretarygeneral.secretaryofic-depts')}}</span>
                </a>
            </div>
        </div>

        {{--cards bodies--}}
        <div class="d-flex justify-content-around flex-column" id="contevext">
            {{--descripction--}}
            <div class="collapse m-4" id="collapse">
                <div class="card card-body sectionbody">
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
            <div class="collapse m-4" id="collapse3">
                <div class="card card-body text-justify">
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
            <div class="collapse m-4" id="collapse4">
                <div class="container col-md-12">
                    <p class="text-justify" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('secretarygeneral.secretaryofic-depts')}}</p>
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
            <div class="content-areas d-flex justify-content-around" id="contevac">
                <div class="collapse" id="collapseExample">
                    <div class="content-areas col-12">
                        <div class="conten-subsytem" style="background-color: #004c9c">
                            <a id="link-subsystem" href="#"><img
                                    src="{{URL::asset('/image/procedure.svg')}}">
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
        <div class="d-flex m-4 card card-body text-left">
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

@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{asset('./image/banners/es/welfare.jpg')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/healthy.png')}}"><span>{{trans('home.students-healthy')}}</span>
            </div>
        </div>
        {{-- cards presentation --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('studyctrl.ctrl-asist-title')}}" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{trans('healthy.health-author')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('healthy.health-author-title')}}</p>
                                <p class="card-text font-weight-bold">{{trans('healthy.health-helps-title')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('healthy.health-author-email')}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            {{--                        <img class="rounded-left" src="{{URL::asset('/image/secretarygeneral/secgeneral.jpg')}}" alt="Secretaria General" style="max-width: 8em;height: 10.75em;">--}}
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('studyctrl.ctrl-chief')}}" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{trans('healthy.health-asist')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('healthy.health-atitle')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('healthy.health-asitmail')}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--contents--}}
        <div class="d-inline-flex justify-content-around content-vext">
            {{--Description--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                 aria-controls="collapse1">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/healthy.png')}}">
                    <span>{{trans('healthy.health-title')}}</span>
                </a>
            </div>
            {{--Mision--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/target.svg')}}">
                    <span>{{trans('healthy.health-mission-title')}}</span>
                </a>
            </div>
            {{--vision--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/eye.svg')}}">
                    <span>{{trans('healthy.health-vision-title')}}</span>
                </a>
            </div>
            {{--Functions--}}
            {{--<div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/settings.svg')}}">
                    <span>{{trans('healthy.health-functions')}}</span>
                </a>
            </div>--}}
            {{--units ads--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                 aria-controls="collapse4">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/lecture.png')}}">
                    <span>{{trans('healthy.health-depts')}}</span>
                </a>
            </div>
        </div>
        {{--contents cards bodies--}}
        <div class="d-inline-flex text-justify justify-content-around flex-column m-4" id="contevext">
            {{--descripction--}}
            <div class="collapse mb-4" id="collapse">
                <div class="card card-body sectionbody">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('healthy.health-title')}}
                    </p>
                    <p class="text-justify"> {{trans('healthy.health-descrip')}}</p>
                </div>
            </div>
            {{--Mision--}}
            <div class="collapse mb-4" id="collapse2">
                <div class="card card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('healthy.health-mission-title')}}
                    </p>
                    <ul>
                        <li><p> {{trans('healthy.health-mission')}}</p></li>
                    </ul>
                </div>
            </div>
            {{--vision--}}
            <div class="collapse mb-4" id="collapse3">
                <div class="card card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('healthy.health-vision-title')}}
                    </p>
                    <ul>
                        <li><p> {{trans('healthy.health-vision')}}</p></li>
                    </ul>
                </div>
            </div>
            {{--Departaments--}}
            <div class="collapse" id="collapse4">
                <div class="container">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('healthy.health-depts')}}</p>
                    <div class="content-areas">
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('./image/scholarship.png')}}">
                                <span>{{trans('healthy.health-becas')}}</span>
                            </a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="{{url('/healthymental')}}">
                                <img src="{{URL::asset('./image/mental-healthy.png')}}">
                                <span>{{trans('healthy.health-psico')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#">
                                <img src="{{URL::asset('./image/social-teaching.png')}}">
                                <span>{{trans('healthy.health-pedag')}}</span></a>
                        </div>
                        {{--links interest--}}
                        <div class="conten-subsytem" style="background-color: #6699cc" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('/image/conection.png')}}">
                                <span>{{trans('healthy.health-links')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            {{--links interest--}}
            <div class="content-areas d-inline-flex" id="contevac">
                <div class="collapse" id="collapseExample">
                    <div class="content-areas">
                        {{--Gazzete--}}
                        <div class="conten-subsytem" style="background-color: #004c9c">
                            <a id="link-subsystem" href="#"><img
                                    src="{{URL::asset('/image/gaceta.png')}}">
                                <span>{{trans('healthy.health-gazzete')}}</span></a>
                        </div>
                        {{--reports--}}
                        <div class="conten-subsytem" style="background-color: #004c9c">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('/image/personal-information.png')}}">
                                <span>{{trans('healthy.health-report')}}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex m-4 card card-body text-left ">
            <h5>{{trans('postgrade.postg-info-title')}}</h5>
            <p>
                <b>{{trans('healthy.health-info-title')}}</b>&nbsp {{trans('healthy.health-info-email')}}
            </p>
            <p>
                <b>{{trans('healthy.health-info-teltit')}}</b>&nbsp{{trans('healthy.health-info-telf')}}
            </p>
            <p>
                <b>{{trans('healthy.health-info-schedtit')}}</b>&nbsp{{trans('healthy.health-info-sched')}}
            </p>
        </div>
    </div>
@endsection

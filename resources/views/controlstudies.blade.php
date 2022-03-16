@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/es/studiescontrol.jpg')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}"><span>{{trans('studyctrl.title')}}</span>
            </div>
        </div>
        {{--        presentations cards --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            {{--                        <img class="rounded-left" src="{{URL::asset('/image/secretarygeneral/secgeneral.jpg')}}" alt="Secretaria General" style="max-width: 8em;height: 10.75em;">--}}
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('studyctrl.ctrl-chief')}}" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{trans('studyctrl.ctrl-chief')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('studyctrl.ctrl-chief-title')}}</p>
                                {{--                            <p class="card-text"><small class="text-muted">{{trans('secretarygeneral.secretaryofic-asitmail')}}</small></p>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('studyctrl.ctrl-asist-title')}}" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{trans('studyctrl.ctrl-aist-grade')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('studyctrl.ctrl-asist-title')}}</p>
                                {{--                            <p class="card-text"><small class="text-muted">{{trans('secretarygeneral.secretaryofic-asitmail')}}</small></p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            {{--                        <img class="rounded-left" src="{{URL::asset('/image/secretarygeneral/secgeneral.jpg')}}" alt="Secretaria General" style="max-width: 8em;height: 10.75em;">--}}
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('studyctrl.ctrl-analist-title')}}" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{trans('studyctrl.ctrl-analist-grade')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('studyctrl.ctrl-analist-title')}}</p>
                                {{--                            <p class="card-text"><small class="text-muted">{{trans('studyctrl.ctrl-chief-email')}}</small></p>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('studyctrl.ctrl-aux-equiv-title')}}" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{trans('studyctrl.ctrl-aux-equiv')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('studyctrl.ctrl-aux-equiv-title')}}</p>
                                {{--                            <p class="card-text"><small class="text-muted">{{trans('studyctrl.ctrl-chief-email')}}</small></p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            {{--                        <img class="rounded-left" src="{{URL::asset('/image/secretarygeneral/secgeneral.jpg')}}" alt="Secretaria General" style="max-width: 8em;height: 10.75em;">--}}
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Asistente" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{trans('studyctrl.ctrl-aux-servest')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('studyctrl.ctrl-aux-serviest-title')}}</p>
                                {{--                            <p class="card-text"><small class="text-muted">{{trans('secretarygeneral.secretaryofic-author-email')}}</small></p>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-4 invisible">
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
        {{-- content information --}}
        <div class="d-flex justify-content-around content-vext m-4">
        {{-- mission --}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/target.svg')}}">
                    <span>{{trans('studyctrl.ctrl-mission-title')}}</span>
                </a>
            </div>
            {{-- vision --}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/eye.svg')}}">
                    <span>{{trans('studyctrl.ctrl-vision-title')}}</span>
                </a>
            </div>
            {{-- principies --}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                 aria-controls="collapse3">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/apoyar.png')}}">
                    <span>{{trans('studyctrl.ctrl-valors-title')}}</span>
                </a>
            </div>
            {{-- functions --}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse4" role="button"
                 aria-expanded="false"
                 aria-controls="collapse4">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/settings.svg')}}">
                    <span>{{trans('studyctrl.ctrl-function-title')}}</span>
                </a>
            </div>
            {{-- organigram --}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse5" role="button"
                 aria-expanded="false"
                 aria-controls="collapse5">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/organigram.png')}}">
                    <span>{{trans('studyctrl.ctrl-organigram')}}</span>
                </a>
            </div>
            {{--fin struct--}}
        </div>
        {{-- card-bodies --}}
        {{--  mision --}}
        <div class="collapse m-4 text-justify" id="collapse">
            <div class="card card-body">
                <p style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('studyctrl.ctrl-mission-title')}}
                </p>
                <ul>
                    <li><p> {{trans('studyctrl.ctrl-mission')}}</p></li>
                </ul>
            </div>
        </div>
        {{-- vision --}}
        <div class="collapse m-4" id="collapse2">
            <div class="card card-body">
                <p class="text-left" style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('studyctrl.ctrl-vision-title')}}
                </p>
                <ul class="text-justify">
                    <li><p> {{trans('studyctrl.ctrl-vision')}}</p></li>
                </ul>
            </div>
        </div>
        {{-- principies --}}
        <div class="collapse m-4" id="collapse3">
            <div class="card card-body">
                <p class="text-left" style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('studyctrl.ctrl-valors-title')}}
                </p>
                <ul class="text-justify">
                    <li><p> {{trans('studyctrl.ctrl-valors-1')}}</p></li>
                    <li><p> {{trans('studyctrl.ctrl-valors-2')}}</p></li>
                    <li><p> {{trans('studyctrl.ctrl-valors-3')}}</p></li>
                    <li><p> {{trans('studyctrl.ctrl-valors-4')}}</p></li>
                    <li><p> {{trans('studyctrl.ctrl-valors-5')}}</p></li>
                    <li><p> {{trans('studyctrl.ctrl-valors-6')}}</p></li>
                    <li><p> {{trans('studyctrl.ctrl-valors-7')}}</p></li>
                </ul>
            </div>
        </div>
        {{-- functions --}}
        <div class="collapse m-4" id="collapse4">
            <div class="card card-body">
                <p class="text-left" style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('studyctrl.ctrl-function-title')}}
                </p>
                <ul class="text-justify">
                    <li><p> {{trans('studyctrl.ctrl-function-1')}}</p></li>
                    <li><p> {{trans('studyctrl.ctrl-function-2')}}</p></li>
                    <li><p> {{trans('studyctrl.ctrl-function-3')}}</p></li>
                    <li><p> {{trans('studyctrl.ctrl-function-4')}}</p></li>
                    <li><p> {{trans('studyctrl.ctrl-function-5')}}</p></li>
                    <li><p> {{trans('studyctrl.ctrl-function-6')}}</p></li>
                    <li><p> {{trans('studyctrl.ctrl-function-7')}}</p></li>
                </ul>
            </div>
        </div>
        {{-- organigram --}}
        <div class="collapse m-4" id="collapse5">
            <div class="card-body m-4">
                @include('components.ctrlstudyorganigram')
            </div>
        </div>
        <div class="d-flex justify-content-around m-4 text-left card card-body">
            <h5>{{trans('studyctrl.ctrl-info-title')}}</h5>
            <p><b>{{trans('studyctrl.ctrl-email-title')}}</b>&nbsp {{trans('studyctrl.ctrl-email')}}</p>
            <p><b>{{trans('studyctrl.ctrl-telf-title')}}</b>&nbsp{{trans('studyctrl.ctrl-telf')}}</p>
            <p><b>{{trans('studyctrl.ctrl-sched-title')}}</b>&nbsp{{trans('studyctrl.ctrl-sched')}}</p>
        </div>
    </div>
    {{--        </div>--}}

@endsection

@extends('layouts.layout')

@section ('content')
    <div class=".xl-container">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/es/studiescontrol.jpg')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}"><span>{{trans('ctrlstudies.title')}}</span>
            </div>
        </div>
        {{--        presentations cards --}}
        <div class="d-flex justify-content-around m-4">
            <div class="card-group">
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <!-- <img class="rounded-left" src="{{URL::asset('/image/secretarygeneral/secgeneral.jpg')}}" alt="Secretaria General" style="max-width: 8em;height: 10.75em;"> -->
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Asistente" style="max-width: 8em; height: 10.75em; background-color: #336699;">
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
        <div class="d-flex justify-content-around m-4">
            <div class="card-group">
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <!-- <img class="rounded-left" src="{{URL::asset('/image/secretarygeneral/secgeneral.jpg')}}" alt="Secretaria General" style="max-width: 8em;height: 10.75em;"> -->
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Asistente" style="max-width: 8em; height: 10.75em; background-color: #336699;">
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
        <div class="d-flex justify-content-around m-4">
            <div class="card-group">
                <div class="card m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <!-- <img class="rounded-left" src="{{URL::asset('/image/secretarygeneral/secgeneral.jpg')}}" alt="Secretaria General" style="max-width: 8em;height: 10.75em;"> -->
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Asistente" style="max-width: 8em; height: 10.75em; background-color: #336699;">
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
    </div>
@endsection

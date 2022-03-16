@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/viceacademic.png')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/studenuniv.png')}}"><span
                    style="top: 1.1rem; width: 55%;">{{trans('commons.est-pregrade')}}</span>
            </div>
        </div>
        {{--pregrade--}}
        <div class="card-title">
            <div class="d-flex justify-content-around flex-column m-4">
                <p class="text-justify" style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('commons.preg-title')}}</p>
                <div class="content-areas">
                    <div class="conten-subsytem" style="background-color: #6699cc;">
                        <a id="link-subsystem" href="#">
                            <img src="{{URL::asset('image/engineering.png')}}">
                            <span>{{trans('offers.o-systemeng')}}</span>
                        </a>
                    </div>
                    <div class="conten-subsytem" style="background-color: #6699cc;">
                        <a id="link-subsystem" href="#">
                            <img src="{{URL::asset('image/desing.png')}}">
                            <span>{{trans('offers.o-arte')}}</span></a>
                    </div>
                    <div class="conten-subsytem" style="background-color: #6699cc;">
                        <a id="link-subsystem" href="#">
                            <img src="{{URL::asset('image/languages.png')}}">
                            <span>{{trans('offers.o-langs')}}</span></a>
                    </div>
                </div>
                <div class="content-areas">
                    <div class="conten-subsytem" style="background-color: #6699cc;">
                        <a id="link-subsystem" href="#">
                            <img src="{{URL::asset('image/recursos-humanos.png')}}">
                            <span>{{trans('offers.o-admins')}}</span>
                        </a>
                    </div>
                    <div class="conten-subsytem" style="background-color: #6699cc">
                        <a id="link-subsystem" href="#">
                            <img src="{{URL::asset('image/contabilidad.png')}}">
                            <span>{{trans('offers.o-contpub')}}</span></a>
                    </div>
                    <div class="conten-subsytem" style="background-color: #6699cc">
                        <a id="link-subsystem" href="#">
                            <img src="{{URL::asset('image/law.png')}}">
                            <span>{{trans('offers.o-law')}}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/nuestrosdecanatos.png')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}"><span style="top: 0;">{{trans('humarte.title')}}</span>
            </div>
        </div>
        <div class="card m-4 py-4">
            <p class="card-title font-weight-bold">
                En espera de información
            </p>
            <img class="m-auto" src="{{url::asset('image/pause-info.png')}}" alt="pause information" width="5%">
        </div>
    </div>
@endsection

@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/es/deans.png')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/logo-unimar.png')}}"><span>{{trans('header.estgen')}}</span>
            </div>
        </div>
        <div class="content">
            
        </div>
    </div>
@endsection

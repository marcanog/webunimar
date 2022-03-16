@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/es/rec_humans.png')}}">
        </div>
        {{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}"><span>{{trans('rrhh.title')}}</span>
            </div>
        </div>
        {{--contents--}}
        <div class="content">
            
        </div>
    </div>
@endsection
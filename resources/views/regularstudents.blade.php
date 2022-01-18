@extends('layouts.layout')

@section ('content')
    <div class=".xl-container">
        <div class="banner-main">
            <img src="{{URL::asset('/image/viceacademic.png')}}">
        </div>
        {{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}"><span>{{trans('newsu.n-title')}}</span>
            </div>
        </div>
    </div>
@endsection

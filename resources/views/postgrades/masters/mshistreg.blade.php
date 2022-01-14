@extends('layouts.layout')

@section ('content')
    <div class=".xl-container">
        <div class="banner-main">
            <img src="{{URL::asset('/image/viceacademic.png')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}"><span
                    style="font-size: 0.85em; width: 55%;">{{trans('commons.calendar-academy')}}</span>
            </div>
        </div>
    </div>
@endsection

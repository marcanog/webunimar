@extends('layouts.layout')

@section ('content')
    <div class=".xl-container">
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
    </div>
@endsection

@extends('layouts.layout')

@section ('content')
    <div class=".xl-container">
        <div class="banner-main">
            <img src="{{URL::asset('./image/ourinstitution.png')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('./image/logo-unimar.png')}}"><span>{{trans('history.our-history-title')}}</span>
            </div>
        </div>
        <div class="d-flex m-4 flex-column">
            <div class="text-justify m-4 sectionbody">
                <p>{{trans('history.our-history-1')}}</p>
                <p>{{trans('history.our-history-2')}}</p>
                <p>{{trans('history.our-history-3')}}</p>
                <p>{{trans('history.our-history-4')}}</p>
                <p>{{trans('history.our-history-5')}}</p>
            </div>
        </div>
@endsection

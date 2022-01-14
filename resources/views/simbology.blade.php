@extends('layouts.layout')

@section ('content')
    <div class=".xl-container">
        <div class="banner-main">
            <img src="{{URL::asset('./image/ourinstitution.png')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('./image/logo-unimar.png')}}"><span>{{trans('ourinstitute.our-symbology')}}</span>
            </div>
        </div>
        <div class="d-flex m-4">
            <div class="d-flex flex-column">
                {{-- <p class="font-weight-bold">{{trans('ourinstitute.our-logo')}}</p>--}}
                <div class="d-flex">
                    <div class="col-md-6 px-4 m-auto text-center text-bold">
                        <p class="m-4">{{trans('ourinstitute.our-logoh')}}</p>
                        <img src="{{URL::asset('/image/logo-formal-horizontal.jpg')}}" style="width: 70%;">
                    </div>
                    <div class="col-md-6 px-4 m-auto text-center text-bold">
                        <p class="m-4">{{trans('ourinstitute.our-logov')}}</p>
                        <img src="{{URL::asset('/image/logo-formal-vertical.jpg')}}" style="width: 35%;">
                    </div>
                </div>
                <div class="d-flex justify-content-around">
                    <div class="col-md-6 px-4 m-auto text-center text-bold">
                        <p class="m-4">{{trans('ourinstitute.our-hymn')}}</p>
                        <img src="{{URL::asset('/image/himnounimar.png')}}" style="width: 75%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

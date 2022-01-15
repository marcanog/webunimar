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
                    style="font-size: 0.85em; width: 55%;">{{trans('offers.o-title')}}</span>
            </div>
        </div>
        {{--contents offers pregrade--}}
        <div class="d-inline-flex justify-content-around m-4 content-vext">
            {{--Enginering--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                 aria-controls="collapse1">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/secretary.png')}}">
                    <span>{{trans('offers.o-enginerrs')}}</span>
                </a>
            </div>
            {{--humarte--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/settings.svg')}}">
                    <span>{{trans('offers.o-enginerrs')}}</span>
                </a>
            </div>
            {{--ceys--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                 aria-controls="collapse4">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/lecture.png')}}">
                    <span>{{trans('offers.o-enginerrs')}}</span>
                </a>
            </div>
            {{--cjyp--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                 aria-controls="collapse4">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/lecture.png')}}">
                    <span>{{trans('offers.o-enginerrs')}}</span>
                </a>
            </div>
        </div>
    </div>
@endsection

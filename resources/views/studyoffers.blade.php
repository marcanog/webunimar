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
                    style="font-size: 0.85em; width: 55%;">{{trans('vacademy.vacad-comcurric')}}</span>
            </div>
        </div>
        {{--contents--}}
        <div class="d-inline-flex justify-content-around m-4 content-vext">
            {{--Vision--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                 aria-controls="collapse1">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/secretary.png')}}">
                    <span>{{trans('secretarygeneral.secretaryofic-title')}}</span>
                </a>
            </div>
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/settings.svg')}}">
                    <span>{{trans('secretarygeneral.secretaryofic-functions')}}</span>
                </a>
            </div>
            {{--units ads--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                 aria-controls="collapse4">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/lecture.png')}}">
                    <span>{{trans('secretarygeneral.secretaryofic-depts')}}</span>
                </a>
            </div>
        </div>
    </div>
@endsection

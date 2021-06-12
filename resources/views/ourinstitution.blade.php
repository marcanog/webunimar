@extends('layouts.layout')
@section ('content')
<div class=".xl-container">
    <div class="banner-main">
        <img src="{{asset('./image/Slider1.png')}}">
    </div>
    <!-- <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section" src="{{URL::asset('./image/logo-unimar.png')}}"><span>{{trans('commons.our-concept')}}</span>
        </div>
        <div class="body-concept">
            <span>{{trans('commons.our-content-1')}}</span>
            <span>{{trans('commons.our-content-3')}}</span>
            <span>{{trans('commons.our-content-4')}}</span>
            <span>{{trans('commons.our-content-2')}}</span>
        </div>
    </div> -->
     <div class="content-links">
        <div class="links-interest" id="contentimg" style="background-color: #336699">
            <a type="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#modal1" class="open-modal" data-open="modal1"><img src="{{URL::asset('./image/innovation.png')}}">
            <span>{{trans('commons.our-concept')}}</span></a>
        </div>
            @include('institution-modal')
        <div class="links-interest" id="contentimg" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/target.svg')}}">
            <span>{{trans('commons.our-mision')}}</span></a>
        </div>
        <div class="links-interest" id="contentimg" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/education.png')}}">
            <span>{{trans('commons.our-vision')}}</span></a>
        </div>
        <div class="links-interest"id="contentimg" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/history.svg')}}">
            <span>{{trans('commons.our-history')}}</span></a>
        </div>
        <div class="links-interest" id="contentimg" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/cube.svg')}}">
            <span>{{trans('commons.our-identity')}}</span></a>
        </div>
        <div class="links-interest" id="contentimg" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/jigsaw.svg')}}">
            <span>{{trans('commons.our-organization')}}</span></a>
        </div>
    </div>
@endsection
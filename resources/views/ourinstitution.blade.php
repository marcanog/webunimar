@extends('layouts.layout')

@section ('content')
<div class=".xl-container">
    <div class="banner-main">
        <img src="{{asset('./image/ourinstitution.png')}}">
    </div>
    <div  class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section" src="{{URL::asset('./image/logo-unimar.png')}}"><span>{{trans('home.our-intstitution')}}</span>
        </div>
    </div>
    <div class="content-links">
        <div class="links-interest" id="contentimg" style="background-color: #336699">
            <a type="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#modal1" class="open-modal" data-open="modal1"><img src="{{URL::asset('./image/innovation.png')}}">
            <span>{{trans('ourinstitute.our-concept')}}</span></a>
        </div>
            @include('institution-modal')
        <div class="links-interest" id="contentimg" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/target.svg')}}">
            <span>{{trans('ourinstitute.our-mision')}}</span></a>
        </div>
        <div class="links-interest" id="contentimg" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/education.png')}}">
            <span>{{trans('ourinstitute.our-vision')}}</span></a>
        </div>
    </div>
    <div class="content-links">
        <div class="links-interest"id="contentimg" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/history.svg')}}">
            <span>{{trans('ourinstitute.our-history')}}</span></a>
        </div>
        <div class="links-interest" id="contentimg" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/cube.svg')}}">
            <span>{{trans('ourinstitute.our-identity')}}</span></a>
        </div>
        <div class="links-interest" id="contentimg" style="background-color: #336699">
            <a href="/organization"><img src="{{URL::asset('./image/jigsaw.svg')}}">
            <span>{{trans('ourinstitute.our-organization')}}</span></a>
        </div>
    </div>
@endsection
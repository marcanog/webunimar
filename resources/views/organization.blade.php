@extends('layouts.layout')

@section('content')
<div class=".xl-container">
    <div class="banner-main">
        <img src="{{asset('./image/Slider1.png')}}">
    </div>
    <div  class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section" src="{{URL::asset('./image/logo-unimar.png')}}"><span>{{trans('home.our-intstitution')}}</span>
        </div>
    </div>
    <div class="content-links">
        <div class="links-interest" id="contentimg" style="background-color: #336699">
            <!-- <a type="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#modal1" class="open-modal" data-open="modal1"> -->
            <a id="foundbtn" onclick="showtext()">
            <img src="{{URL::asset('./image/innovation.png')}}">
            <span>{{trans('org.founders')}}</span></a>
        </div>
            <!-- @include('institution-modal') -->
        <div class="links-interest" id="contentimg" style="background-color: #336699">
            <a id="campusbtn" href="#"><img src="{{URL::asset('./image/target.svg')}}">
            <span>{{trans('org.campus')}}</span></a>
        </div>
        <div class="links-interest" id="contentimg" style="background-color: #336699">
            <a id="orgbtn" href="#"><img src="{{URL::asset('./image/education.png')}}">
            <span>{{trans('org.struct-org')}}</span></a>
        </div>
    </div>
    <div>
        <p class="titlefound">{{trans('org.founders')}}</p>
        <p >{{trans('org.')}}
    </div>
</div>
@endsection
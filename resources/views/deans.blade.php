@extends('layouts.layout')

@section('content')
<div class=".xl-container">

    <div class="banner-main">
        <img src="{{asset('./image/Slider1.png')}}">
    </div>

    <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section" src="{{URL::asset('./image/graduate.png')}}"><span>{{trans('home.academics_areas')}}</span>
        </div>
    </div>
    <div class="content-areas">
        <div class="content-deanship" style="background-color: #BFBABB">
            <a href="#">
                <img src="{{URL::asset('./image/deans/humanidades.png')}}">
                <span>{{trans('home.humarte')}}</span>
            </a>
        </div>
        <div class="content-deanship" style="background-color: #E4032C">
            <a href="#"><img src="{{URL::asset('./image/deans/csjuridicas-politicas.png')}}">
            <span>{{trans('home.cjyp')}}</span></a>
        </div>
        <div class="content-deanship" style="background-color: #B22029">
            <a href="#"><img src="{{URL::asset('./image/deans/cseconomicas-sociales.png')}}">
            <span>{{trans('home.ceys')}}</span></a>
        </div>
        <div class="content-deanship" style="background-color: #003B71">
            <a href="#"><img src="{{URL::asset('./image/deans/ingenieria.png')}}">
            <span>{{trans('home.ingsyst')}}</span></a>
        </div>
    </div>

    <div class="content-areas">
        <div class="content-deanship" style="background-color: #00A8E2">
            <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
            <span>{{trans('home.estgen')}}</span></a>
        </div>
        <div class="content-deanship" style="background-color: #EC7700">
            <a href="/vextension"><img src="{{URL::asset('./image/unimar1.jpg')}}">
            <span>{{trans('home.extent')}}</span></a>
        </div>
        <div class="content-deanship" style="background-color: #00953E">
            <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
            <span>{{trans('home.posteinvg')}}</span></a>
        </div>
        <div class="content-deanship" style="background-color: #f6A016">
            <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
            <span>{{trans('home.acadconvens')}}</span></a>
        </div>
    </div>

</div>

@endsection
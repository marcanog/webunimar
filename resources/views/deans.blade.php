@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/nuestrosdecanatos.png')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/graduate.png')}}"><span>{{trans('home.academics_areas')}}</span>
            </div>
        </div>
        <div class="content-areas">
            <div class="content-deanship" style="background-color: #BFBABB">
                <a href="{{url('/humarte')}}">
                    <img src="{{URL::asset('./image/deans/humanity.png')}}">
                    <span>{{trans('home.humarte')}}</span><br>
                </a>
            </div>
            <div class="content-deanship" style="background-color: #E4032C">
                <a href="{{url('/csurpol')}}"><img src="{{URL::asset('./image/deans/csjuridics.png')}}">
                <span>{{trans('home.cjyp')}}</span></a><br>
            </div>
            <div class="content-deanship" style="background-color: #B22029">
                <a href="{{url('/cssocecon')}}"><img src="{{URL::asset('./image/deans/cseconomicsocials.png')}}">
                <span>{{trans('home.ceys')}}</span></a><br>
            </div>
        </div>
        <div class="content-areas">
            <div class="content-deanship" style="background-color: #00A8E2">
                <a href="{{url('/genestudies')}}"><img src="{{URL::asset('./image/deans/estgenerals.png')}}">
                <span>{{trans('home.estgen')}}</span></a>
            </div>
            <div class="content-deanship" style="background-color: #003B71">
                <a href="{{url('/engineerie')}}"><img src="{{URL::asset('./image/deans/ingenery.png')}}">
                <span>{{trans('home.ingsyst')}}</span></a>
            </div>
{{--           <div class="content-deanship" style="background-color: #EC7700">--}}
{{--                <a href="/vextension"><img src="{{URL::asset('./image/deans/extension.png')}}">--}}
{{--                <span>{{trans('home.extent')}}</span></a>--}}
{{--            </div> --}}
{{--            <div class="content-deanship" style="background-color: #00953E">--}}
{{--                <a href="/postgrade"><img src="{{URL::asset('./image/deans/postgrade.png')}}">--}}
{{--                <span>{{trans('home.posteinvg')}}</span></a>--}}
{{--            </div>--}}
{{--            <div class="content-deanship" style="background-color: #f6A016">--}}
{{--                <a href="#"><img src="{{URL::asset('./image/deans/agreements.png')}}">--}}
{{--                <span>{{trans('home.acadconvens')}}</span></a>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection

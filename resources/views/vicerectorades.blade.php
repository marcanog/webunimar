@extends('layouts.layout')

@section('content')
<style>
.flex.content-vext {
	justify-content: space-around;
	margin: 1rem 1.3rem;
	padding: 0 1.5rem 1rem 0;
}
</style>
<div class=".xl-container">
    <div class="banner-main">
        <img src="{{asset('./image/viceacademic.png')}}">
    </div>
    <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section" src="{{URL::asset('./image/graduate.png')}}"><span>{{trans('commons.vicerectorades-title')}}</span>
        </div>
    </div>
    <div class="flex content-vext">
            <div class="links-interest" id="contentimg" style="background-color: #336699">
                <a href="/vacademic" id="foundbtn">
                <img src="{{URL::asset('./image/academic.svg')}}">
                <span>{{trans('commons.vice-acad-title')}}</span></a>
            </div>
            <div class="links-interest" id="contentimg" style="background-color: #336699">
                <a href="/vextension" id="campusbtn">
                <img src="{{URL::asset('./image/educationv.svg')}}">
                <span>{{trans('commons.vice-ext-title')}}</span></a>
            </div>
    </div>
</div>
@endsection
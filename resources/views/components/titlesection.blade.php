<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- <link rel="stylesheet" href="{{ URL::asset("./css/app.css") }}">
<script src="{{ URL::asset("./js/script.js") }}"></script> -->
<style>
/* .container-sm {
    background: #6699CC;
    color: #FFFFFF;
    width: 20%;
    margin: 5px 0;
    border-top-right-radius: 20px;
    display: flex;
}
span .container-sm {
    color: #FFFFFF;
}
#img-section {
    width: 32px;
    margin: 1em;
}
.container-sm > span {
    letter-spacing: 0.15em;
    margin: 1.25em 0.5em;
    font-size: 1.15em;
}
.section-content {
    margin: 30px 0;
} */
</style>
<body>
@extends('layouts.welcome')
@section('news')
<div  class="section-content">
    <div class="container-sm">
        <img id="img-section" src="{{URL::asset('./image/megafono.png')}}"><span>Novedades/Noticias</span>
    </div>
</div>
@endsection

@section('events')
<div class="section-content">
     <div class="container-sm">
        <img id="img-section" src="{{URL::asset('./image/calendar.png')}}"><span>Agenda/Eventos</span>
    </div>
</div> 
@endsection

@section('areas')
<div class="section-content">
    <div class="container-sm">
        <img id="img-section" src="{{URL::asset('./image/graduate.png')}}"><span>Áreas acádemicas</span>
    </div>
</div>
@endsection

@section('links')
<div class="section-content">
    <div class="container-sm">
        <img id="img-section" src="{{URL::asset('./image/conection.png')}}"><span>Enlaces de interés</span>
    </div>
</div>
@endsection

section('location')
<div class="section-content">
    <div class="container-sm">
        <img id="img-section" src="{{URL::asset('./image/map.png')}}"><span>Ubicación</span>
    </div>
</div>
@endsection
</body>
</html>
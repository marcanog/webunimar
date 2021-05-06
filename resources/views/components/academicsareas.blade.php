<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- <link rel="stylesheet" href="{{ URL::asset("./css/app.css") }}">
<script src="{{ URL::asset("./js/script.js") }}"></script> -->
<style>
.content-deanship > span{
    font-size:1.15em;
    text-align: center;
}
.content-areas {
    display: flex;
    justify-content: space-around;
    margin: 1em;
}
.content-deanship {
    display: flex;
    border-radius: 20px;
    border: 1px solid #c1c1c1;
    width: 20%;
}
.content-deanship > a > img {
    display: flex;
    border-top-right-radius: 20px;
    border-top-left-radius: 20px;
    justify-content: space-around;
    width: 100%;
}
.content-deanship > a > span {
    display: flex;
    flex: 0 0 25%;
    margin: 1em;
    font-size: 1.35em;
    justify-content: center;
    color: #FFFFFF;
}
.content-deanship > a {
    text-transform: none;
    text-decoration: none;
}
</style>
<body>
<div class="content-areas">
    <div class="content-deanship" style="background-color: #BFBABB">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>Humanidades, Artes y Educación</span></a>
    </div>
     <div class="content-deanship" style="background-color: #E4032C">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>Ciencias Jurídicas y Políticas</span></a>
    </div>
     <div class="content-deanship" style="background-color: #B22029">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>Ciencias Económicas y Sociales</span></a>
    </div>
     <div class="content-deanship" style="background-color: #003B71">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>Ingeniería de Sistemas y Afines</span></a>
    </div>
</div>
<div class="content-areas">
    <div class="content-deanship" style="background-color: #00A8E2">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>Estudios Generales</span></a>
    </div>
     <div class="content-deanship" style="background-color: #EC7700">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>Extensión</span></a>
    </div>
     <div class="content-deanship" style="background-color: #00953E">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>Postgrado e Investigación</span></a>
    </div>
     <div class="content-deanship" style="background-color: #f6A016">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>Otros Convenios</span></a>
    </div>
</div>
</body>
</html>
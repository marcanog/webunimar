<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- <link rel="stylesheet" href="{{ URL::asset("./css/app.css") }}">
<script src="{{ URL::asset("./js/script.js") }}"></script> -->
<style>
/* .links-interest > span{
font-size:1.15em;
text-align: center;
}
.content-links {
    display: flex;
    justify-content: space-around;
    margin: 1em;
}
.links-interest {
    display: flex;
    border-radius: 20px;
    border: 1px solid #c1c1c1;
    width: 20%;
}
.links-interest > a > img {
    display: flex;
    border-top-right-radius: 20px;
    border-top-left-radius: 20px;
    justify-content: space-around;
    width: 60%;
    padding: 1.2em;
    margin: 0 auto;
}
.links-interest > a > span {
    display: flex;
    flex: 0 0 25%;
    margin: 1em;
    font-size: 1.35em;
    justify-content: center;
    color: #FFFFFF;
}
.links-interest > a {
    text-transform: none;
    text-decoration: none;
} */
</style>
<body>
    <div class="content-links">
         <div class="links-interest" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/studying.png')}}">
            <span>Ofertas de Estudios</span></a>
        </div>
        <div class="links-interest" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/digital.png')}}">
            <span>Unimar Virtual</span></a>
        </div>
        <div class="links-interest" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/elearning.png')}}">
            <span>Educación Virtual</span></a>
        </div>
        <div class="links-interest" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/analisys.png')}}">
            <span>Unimar Científica</span></a>
        </div>
    </div>
     <div class="content-links">
         <div class="links-interest" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/idea.png')}}">
            <span>Innovar</span></a>
        </div>
        <div class="links-interest" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/listening.png')}}">
            <span>Radio Unimar</span></a>
        </div>
        <div class="links-interest" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/healthy.png')}}">
            <span>Bienestar Estudiantil</span></a>
        </div>
        <div class="links-interest" style="background-color: #336699">
            <a href="#"><img src="{{URL::asset('./image/mental-healthy.png')}}">
            <span>Evaluación y Apoyo Psicológico</span></a>
        </div>
    </div>
</body>
</html>
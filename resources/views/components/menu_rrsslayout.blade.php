<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- <link rel="stylesheet" href="{{ URL::asset("./css/app.css") }}">
<script src="{{ URL::asset("./js/script.js") }}"></script> -->
<style>
 .img-rrss{
     width: 25px;
 }
 .flex-row {
    display: flex;
    flex: 0 0 85%;
}
 .flex.nav-bar {
    display: flex;
    flex: 0 0 100%;
}
nav.navbar.navbar-light {
    margin: 5px;
    background-color: transparent !important;
}
.rss-bar {
    display: flex;
    flex-wrap: nowrap;
    width: 80%;
    justify-content: flex-end;
    align-items: center;
    position: relative;
    top: 0.4em;
    margin: auto;
}
.search-bar {
    display: flex;
    flex-wrap: nowrap;
    justify-content: flex-end;
    width: 25%;
    align-items: center;
}
input.search {
    /* height: 30%; */
    /* vertical-align: middle; */
    padding: 0.45em;
    border: 1px solid #c1c1c1;
    border-radius: 1em;
    position: relative;
    bottom: 0.8em;
}
img.search-img {
    padding: 3px;
    width: 30px;
    /* align-items: center; */
    vertical-align: inherit;
    /* top: 10px; */
    /* position: relative; */
}
form.form-inline {
    display: inline;
    position: relative;
    top: 2px;
}
</style>
    <body>
        <div class="flex-row">
            <div class="flex nav-bar">
                    <div class="rss-bar">
                        <ul>
                            <a href="#"><img class="img-rrss" src="./image/rrss/instagram.png"></a>
                            <a href="#"><img class="img-rrss" src="./image/rrss/facebook.png"></a>
                            <a href="#"><img class="img-rrss" src="./image/rrss/gorjeo.png"></a>
                            <a href="#"><img class="img-rrss" src="./image/rrss/linkedin.png"></a>
                        </ul>
                    </div>
                    <nav class="navbar navbar-light bg-light search-bar">
                         <form class="form-inline">
                            <input class="search" type="text" placeholder="Search" arial-label="search"><img class="search-img btn" src="{{ URL::asset('./image/lupa_b.png')}}" href="#">
                        </form>
                    </nav>
            </div><!-- When there is no desire, all things are at peace. - Laozi -->
        </div>
    </body>
</html>

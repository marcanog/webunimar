<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- <link rel="stylesheet" href="{{ URL::asset("./css/app.css") }}">
<script src="{{ URL::asset("./js/script.js") }}"></script> -->
<style>
.date-news {
    background: #336699;
    border-radius: 20px;
    text-align: center;
    flex: 0 0 10%;
    height: 5em;
}

.content-date {
    display: flex;
    justify-content: space-around;
    margin: 1em;
    flex: 0 0 45%;
}

.content-event {
    flex-direction: row;
    flex: 0 0 100%;
    display: flex;
    justify-content: space-around;
}

.date-news > span {
    position: relative;
    text-align: center;
    color: #fff;
    top: 1.9em;
}
.title-news {
    text-align: justify;
    flex: 0 0 75%;
    /* margin: 1em; */
}
.title-news > span {
    font-size: 1.15em;
}
</style>
<body>
<div class="content-event">
    <div class="content-date">
        <div class="date-news">
           <span>23 Jun</span>
        </div>
        <div class="title-news">
           <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
           <a href="#">Leer más</a>
        </div>
    </div>
    <div class="content-date">
        <div class="date-news">
           <span>23 Jun</span>
        </div>
        <div class="title-news">
           <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
            <a href="#">Leer más</a>
        </div>
    </div>
</div>
</body>
</html>
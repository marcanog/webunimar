<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- <link rel="stylesheet" href="{{ URL::asset("./css/app.css") }}">
<script src="{{ URL::asset("./js/script.js") }}"></script> -->
<!-- Compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Minified JS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

<style>
#carousel-home{
    width: 100%;
}
.carousel-control .glyphicon-chevron-right, .carousel-control .icon-next {
    right: 15%;
}
.carousel-indicators .active {
    background: #336699;
}
.carousel-indicators li {
    background: #c1c1c1;
}
.carousel-indicators {
    position: absolute;
    bottom: -45px;
    left: 90%;
    z-index: 15;
    width: 10%;
    padding-left: 0;
    margin-left: 0;
    text-align: center;
    list-style: none;
}
.carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev {
    margin-left: -15px;
}
.carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev {
    left: 15%;
}
</style>
<!-- <script type="text/javascript">
  // import Swiper bundle with all modules installed
  import Swiper from 'swiper/bundle';

  // init Swiper:
  const swiper = new Swiper(...);

$('.carousel').carousel({
     interval: 3000,
     pause:true,
     wrap:false
});
</script>
<script type="text/javascript">
// Call carousel manually
$('#myCarouselCustom').carousel();

// Go to the previous item
$("#prevBtn").click(function(){
    $("#myCarouselCustom").carousel("prev");
});
// Go to the previous item
$("#nextBtn").click(function(){
    $("#myCarouselCustom").carousel("next");
});
</script> -->
<body>
    <div id="Carousel-home" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#Carousel-home" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel-home" data-slide-to="1"></li>
            <li data-target="#Carousel-home" data-slide-to="2"></li>
        </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="image/Slider1.png" alt="">
        </div>
        <div class="item">
            <img src="image/Slider1.png" alt="">
        </div>
        <div class="item">
            <img src="image/Slider1.png" alt="">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#Carousel-home" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#Carousel-home" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</body>
</html>
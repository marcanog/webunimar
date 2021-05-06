<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
/* 
html, body {
  position: relative;
  width: 100%;
  height: 100%;
}
body {
    margin: 0;
    padding: 0;
  }
.swiper-container {
  width: 100%;
  height: 100%;
}
.swiper-slide {
  text-align: center;
  font-size: 18px;
  background: #fff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
  counter-increment: swiper-slide;
  width: 300px !important;
  margin: 0 auto;
}
.swiper-slide img {
  width: 100%;
  height: 100%;
  border: 1px solid #c1c1c1;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
}
.card-slide {
    width: 100%;
    border-radius: 20px;
    border-bottom-left-radius: 20px;
    border: 0.5px solid #c1c1c1;
    border-bottom-right-radius: 20px;
}
.card-slide > a {
    display: flex;
    float: left;
    padding-left: 1em;
    font-size: 0.75em;
}
.swiper-pagination-bullet-active {
  background:white;
}
.swiper-pagination {
    position: relative !important;
    text-align: center;
    top: 10px;
    transition: .3s opacity;
    transform: translate3d(0,0,0);
    z-index: 10;
}
.swiper-pagination-bullet{
  height: 10px !important;
  width: 10px !important;
}
span.swiper-pagination-bullet.swiper-pagination-bullet-active {
    background: #336699;
    width: 11px !important;
    height: 11px !important;
}
.swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
    bottom: 10px;
    left: 45% !important;
    width: 100%;
    margin-bottom: 1em;
} */
</style>
<body>
    
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<div class="swiper-container" data-flickity>
    <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class ="card-slide">
            <img src="{{URL:: asset('./image/unimar1.jpg')}}">
            <span class="card-title">Title de prueba</span><br>
            <a href="#">Ver más</a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class ="card-slide">
            <img src="{{URL:: asset('./image/unimar1.jpg')}}">
            <span class="card-title">Title de prueba</span><br>
            <a href="#">Ver más</a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class ="card-slide">
            <img src="{{URL:: asset('./image/unimar1.jpg')}}">
            <span class="card-title">Title de prueba</span><br>
            <a href="#">Ver más</a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class ="card-slide">
            <img src="{{URL:: asset('./image/unimar1.jpg')}}">
            <span class="card-title">Title de prueba</span><br>
            <a href="#">Ver más</a>
          </div>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
  </div>
<script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
      },
    });
/* import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js' 

   var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
           type: 'bullets',
        clickable:'true'
      },
    });*/
</script>
</body>
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
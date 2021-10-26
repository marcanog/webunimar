@extends('layouts.layout')

@section('content')
    <div class=".xl-container">
        <div class="content">
            <div id="carousel-home" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-home" data-slide-to="1"></li>
                    <li data-target="#carousel-home" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                        <img class="d-block w-100" src="image/banners-medallas.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/ourinstitution.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/ourauthorities.png" alt="">
                    </div>
                </div>
            </div>
            <div  class="section-content">
                <div class="d-flex justify-content-start">
                    <img id="img-section" src="{{URL::asset('./image/megafono.png')}}"><span>{{trans('home.news')}}</span>
                </div>
            </div>
            <div class="container my-4">
            <!--Carousel Wrapper-->
                <div id="multi-item-carousel" class="carousel slide carousel-multi-item" data-ride="carousel">
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src={{asset("./image/unimar1.jpg")}}
                                    alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                            <a class="btn btn-link">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src={{asset("./image/unimar2.jpg")}}
                                    alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                            <a class="btn btn-link">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src={{asset("./image/unimar3.jpg")}}
                                    alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                            <a class="btn btn-link">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src={{asset("./image/unimar1.jpg")}}
                                    alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                            <a class="btn btn-link">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                    <img class="card-img-top" src={{asset('./image/unimar2.jpg')}}
                                    alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                        <a class="btn btn-link">Ver más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src={{asset("./image/unimar3.jpg")}}
                                    alt="Card image cap">
                                    <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                            <a class="btn btn-link">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src={{asset("./image/unimar1.jpg")}}
                                    alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                            <a class="btn btn-link">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src={{asset("./image/unimar2.jpg")}}
                                    alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                            <a class="btn btn-link">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src={{asset("./image/unimar3.jpg")}}
                                    alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                            <a class="btn btn-link">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Third slide-->
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <div class="controls-top">
                        <a class="btn-floating" href="#multi-item-carousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#multi-item-carousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#multi-item-carousel" data-slide-to="1"></li>
                        <li data-target="#multi-item-carouselcls" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                </div>
                <!--/.Carousel Wrapper-->
            </div>
            <div class="section-content">
                <div class="d-flex justify-content-start">
                    <img id="img-section" src="{{URL::asset('./image/calendar.png')}}"><span>{{trans('home.events')}}</span>
                </div>
            </div> 
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
            <div class="section-content">
                <div class="d-flex justify-content-start">
                    <img id="img-section" src="{{URL::asset('./image/graduate.png')}}"><span>{{trans('home.academics_areas')}}</span>
                </div>
            </div>
            <div class="content-areas">
                <div class="content-deanship" style="background-color: #BFBABB">
                    <a href="/humarte">
                        <img src="{{URL::asset('./image/deans/humanity.png')}}">
                        <span>{{trans('home.humarte')}}</span>
                    </a>
                </div>
                <div class="content-deanship" style="background-color: #E4032C">
                    <a href="/csjurpol"><img src="{{URL::asset('./image/deans/csjuridics.png')}}">
                    <span>{{trans('home.cjyp')}}</span></a>
                </div>
                <div class="content-deanship" style="background-color: #B22029">
                    <a href="/cssocecon"><img src="{{URL::asset('./image/deans/cseconomicsocials.png')}}">
                    <span>{{trans('home.ceys')}}</span></a>
                </div>
                <div class="content-deanship" style="background-color: #003B71">
                    <a href="/engineerie"><img src="{{URL::asset('./image/deans/ingenery.png')}}">
                    <span>{{trans('home.ingsyst')}}</span></a>
                </div>
            </div>
            <div class="content-areas">
                <div class="content-deanship" style="background-color: #00A8E2">
                    <a href="/genestud"><img src="{{URL::asset('./image/deans/estgenerals.png')}}">
                    <span>{{trans('home.estgen')}}</span></a>
                </div>
                <div class="content-deanship" style="background-color: #EC7700">
                    <a href="/vextension"><img src="{{URL::asset('./image/deans/extension.png')}}">
                    <span>{{trans('home.extent')}}</span></a>
                </div>
                <div class="content-deanship" style="background-color: #00953E">
                    <a href="/postgrade"><img src="{{URL::asset('./image/deans/postgrade.png')}}">
                    <span>{{trans('home.posteinvg')}}</span></a>
                </div>
                <div class="content-deanship" style="background-color: #f6A016">
                    <a href="#"><img src="{{URL::asset('./image/deans/agreements.png')}}">
                    <span>{{trans('home.acadconvens')}}</span></a>
                </div>
            </div>
            <div class="section-content">
                <div class="d-flex justify-content-start">
                    <img id="img-section" src="{{URL::asset('./image/conection.png')}}"><span>{{trans('home.links_interest')}}</span>
                </div>
            </div>
            <div class="content-links">
                <div class="links-interest" style="background-color: #336699">
                    <a href="#"><img src="{{URL::asset('./image/studying.png')}}">
                    <span>{{trans('home.study_offers')}}</span></a>
                </div>
                <div class="links-interest" style="background-color: #336699">
                    <a href="#"><img src="{{URL::asset('./image/digital.png')}}">
                    <span>{{trans('home.ecampus')}}</span></a>
                </div>
                <div class="links-interest" style="background-color: #336699">
                    <a href="#"><img src="{{URL::asset('./image/elearning.png')}}">
                    <span>{{trans('home.elearning')}}</span></a>
                </div>
                <div class="links-interest" style="background-color: #336699">
                    <a href="#"><img src="{{URL::asset('./image/analisys.png')}}">
                    <span>{{trans('home.cientific_unimar')}}</span></a>
                </div>
            </div>
            <div class="content-links">
                <div class="links-interest" style="background-color: #336699">
                    <a href="/regulations"><img src="{{URL::asset('./image/procedure.svg')}}">
                    <span>{{trans('home.h-regulations')}}</span></a>
                </div>
                <div class="links-interest" style="background-color: #336699">
                    <a href="#"><img src="{{URL::asset('./image/listening.png')}}">
                    <span>{{trans('home.uniradio')}}</span></a>
                </div>
                <div class="links-interest" style="background-color: #336699">
                    <a href="#"><img src="{{URL::asset('./image/healthy.png')}}">
                    <span>{{trans('home.students-healthy')}}</span></a>
                </div>
                <div class="links-interest" style="background-color: #336699">
                    <a href="#"><img src="{{URL::asset('./image/mental-healthy.png')}}">
                    <span>{{trans('home.sicologyc-healthy')}}</span></a>
                </div>
            </div><!-- end content-links-->
            <div class="section-content">
                <div class="d-flex justify-content-start">
                    <img id="img-section" src="{{URL::asset('./image/map.png')}}"><span>{{trans('home.location')}}</span>
                </div>
            </div>
            <div class="location-content">
                <div class= "map-location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.7972847852143!2d-63.88208018566738!3d10.978668292184503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c318c3b89e345cd%3A0xbaf23c34b11f9d7!2sUniversidad%20De%20Margarita!5e0!3m2!1ses-419!2sve!4v1620079489335!5m2!1ses-419!2sve" width="600" height=350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="map-direction">
                    <p>{{trans('home.location-footer')}}</p>
                    <p>{{trans('home.location-code')}}</p>
                    <p>{{trans('home.location-telf')}}</p>
                    <p>{{trans('home.location-code-plus')}}</p>
                    <p>{{trans('home.location-mail')}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

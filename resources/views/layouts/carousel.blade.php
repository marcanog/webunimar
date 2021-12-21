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
                            <img class="card-img-top" src={{asset('./image/unimar1.jpg')}}
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and
                                    make up the bulk of the
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
                                <p class="card-text">Some quick example text to build on the card title and
                                    make up the bulk of the
                                    card's content.</p>
                                <a class="btn btn-link">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card mb-2">
                            <img class="card-img-top" src={{asset('./image/unimar3.jpg')}}
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and
                                    make up the bulk of the
                                    card's content.</p>
                                <a class="btn btn-link">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.First slide-->
            <!--Second slide-->
            {{--<div class="carousel-item">
                <div class="row">
                    @foreach($news as $new)
                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src={{asset('./image/unimar1.jpg')}}
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{ ($new->title) }}</h4>
                                    <p class="card-text">{{($new->resume)}}</p>
                                    <a class="btn btn-link">Ver más</a>
                                </div>
                            </div>
                        </div>
                    @endforeach--}}
            <div class="col-md-4">
                <div class="card mb-2">
                    <img class="card-img-top" src={{asset('./image/unimar2.jpg')}}
                        alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a class="btn btn-link">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                    <img class="card-img-top" src={{asset('./image/unimar3.jpg')}}
                        alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
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
                    <img class="card-img-top" src={{asset('./image/unimar1.jpg')}}
                        alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and
                            make up the bulk of the
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
                        <p class="card-text">Some quick example text to build on the card title and
                            make up the bulk of the
                            card's content.</p>
                        <a class="btn btn-link">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                    <img class="card-img-top" src={{asset('./image/unimar3.jpg')}}
                        alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and
                            make up the bulk of the
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
    <a class="btn-floating" href="#multi-item-carousel" data-slide="prev"><i
            class="fa fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-carousel" data-slide="next"><i
            class="fa fa-chevron-right"></i></a>
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

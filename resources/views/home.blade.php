@extends('layouts.layout')

@section('content')
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
                <img class="d-block w-100" src="{{URL::asset('image/banners-medallas.png')}}" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{URL::asset('image/ourinstitution.png')}}" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{URL::asset('image/ourauthorities.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section"
                 src="{{URL::asset('image/megafono.png')}}">
            <span>{{trans('home.news')}}</span>
        </div>
    </div>
    {{--news unimar--}}
    <div class="d-flex justify-content-around m-4">
        <div class="card-group owl-carousel" id="newsdesktop">
            <!-- @foreach($news as $new)
                <div class="card m-2 h-100 responsive">
                    <img src="{{asset('image/newsimg/unimar3.jpg')}}" class="card-img-top" alt="image-news">
                    <div class="card-body">
                        <h6 class="card-title font-weight-bold">{{($new->title)}}</h6>
                        <div class="text-justify m-0" id="card-content" style="font-size: x-small;">
                            {!!($new->resume)!!}
                        </div>
                        <a href="{{url('/newsunimar')}}" class="card-link" style="font-size: small;">{{trans('home.more')}}</a>
                    </div>
                </div>
            @endforeach -->
                <div class="card m-2 h-100 responsive">
                    <img src="{{asset('image/newsimg/imagen.php.jpeg')}}" class="card-img-top" alt="image-news">
                    <div class="card-body">
                        <h6 class="card-title font-weight-bold">Universidad de Margarita firma Convenio Interinstitucional con el Colegio de Contadores Públicos del estado Nueva Esparta</h6>
                        <div class="text-justify m-0" id="card-content" style="font-size: x-small;">
                            <p>El pasado 20 de octubre la Universidad de Margarita, UNIMAR , y el Colegio de Contadores Públicos de Nueva Esparta, CCPENE, firmaron un Convenio de cooperación interinstitucional, con el objetivo de desarrollar actividades conjuntas encaminadas a la formación, capacitación y divulgación de conocimientos de contaduría pública.</p>
                        </div>
                        <a href="{{url('/newsunimar')}}" class="card-link" style="font-size: small;">{{trans('home.more')}}</a>
                    </div>
                </div>
                <div class="card m-2 h-100 responsive">
                    <img src="{{asset('image/newsimg/nota-revista-cient.jpg')}}" class="card-img-top" alt="image-news">
                    <div class="card-body">
                        <h6 class="card-title font-weight-bold">Universidad de Margarita celebra la publicación del primer número de la revista digital</h6>
                        <div class="text-justify m-0" id="card-content" style="font-size: x-small;">
                            <p>UNIMAR CIENTÍFICA. Revista científica de la Universidad de Margarita</p>
                        </div>
                        <a href="{{url('/newsunimar')}}" class="card-link" style="font-size: small;">{{trans('home.more')}}</a>
                    </div>
                </div>
                <div class="card m-2 h-100 responsive">
                    <img src="{{asset('image/newsimg/entrega-DHC-maestro-Lucena-6.jpg')}}" class="card-img-top" alt="image-news">
                    <div class="card-body">
                        <h6 class="card-title font-weight-bold">Universidad de Margarita entregó Título Doctor Honoris Causa al Maestro Ecberht Lucena</h6>
                        <div class="text-justify m-0" id="card-content" style="font-size: x-small;">
                            <p>El pasado 8 de noviembre en el salón Nueva Cádiz del hotel Venetur, el Maestro Ecberht Lucena recibió el título Doctor Honoris Causa, el primero entregado por la Universidad de Margarita. </p>
                        </div>
                        <a href="{{url('/newsunimar')}}" class="card-link" style="font-size: small;">{{trans('home.more')}}</a>
                    </div>
                </div>
                <div class="card m-2 h-100 responsive">
                    <img src="{{asset('image/newsimg/fachada-unimar-450pix.jpg')}}" class="card-img-top" alt="image-news">
                    <div class="card-body">
                        <h6 class="card-title font-weight-bold">Universidad de Margarita anuncia dos nuevos cursos introductorios</h6>
                        <div class="text-justify m-0" id="card-content" style="font-size: x-small;">
                            <p>El Decanato de Estudios Generales de la Universidad de Margarita anuncia la próxima realización de dos nuevos cursos introductorios para todos los interesados en seguir alguna de las carreras que se dictan en nuestra Casa de Estudios.</p>
                        </div>
                        <a href="{{url('/newsunimar')}}" class="card-link" style="font-size: small;">{{trans('home.more')}}</a>
                    </div>
                </div>
        </div>
    </div>

    <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section"
                 src="{{URL::asset('image/calendar.png')}}"><span>{{trans('home.events')}}</span>
        </div>
    </div>

    {{--events unimar--}}
    <div class="card-group owl-carousel" id="eventdesktop">
        @foreach($events as $event)
            <div class="card mx-3 mt-4 h-100">
                <div class="row no-gutters">
                    <div class="col-md-4 text-white content-date">
                        <p>{{\Carbon\Carbon::parse(strtotime($event->start))->formatLocalized("%d %b")}}</p>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-left">{{($event->title)}}</h5>
                            <p class="card-text text-justify">T {{($event->description)}}</p>
                            <a href="{{url('/eventsunimar')}}" class="card-link" style="font-size: small;">{{trans('home.more')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
{{--section content--}}
    <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section"
                 src="{{URL::asset('image/graduate.png')}}"><span>{{trans('home.academics_areas')}}</span>
        </div>
    </div>
    {{--Contents deans--}}
    <div class="content-areas">
        <div class="content-deanship" style="background-color: #BFBABB">
            <a href="{{URL('/humarte')}}">
                <img src="{{URL::asset('image/deans/humanity.png')}}">
                <span>{{trans('home.humarte')}}</span>
            </a>
        </div>
        <div class="content-deanship" style="background-color: #E4032C">
            <a href="{{URL('/cjyp')}}"><img src="{{URL::asset('image/deans/csjuridics.png')}}">
                <span>{{trans('home.cjyp')}}</span></a>
        </div>
        <div class="content-deanship" style="background-color: #B22029">
            <a href="{{URL('/ceys')}}"><img src="{{URL::asset('image/deans/cseconomicsocials.png')}}">
                <span>{{trans('home.ceys')}}</span></a>
        </div>
        <div class="content-deanship" style="background-color: #003B71">
            <a href="{{URL('/engineerie')}}"><img src="{{URL::asset('image/deans/ingenery.png')}}">
                <span>{{trans('home.ingsyst')}}</span></a>
        </div>
    </div>
{{--content academics areas--}}
    <div class="content-areas">
        <div class="content-deanship" style="background-color: #00A8E2">
            <a href="{{URL('/genestud')}}"><img src="{{URL::asset('image/deans/estgenerals.png')}}">
                <span>{{trans('home.estgen')}}</span></a>
        </div>
        <div class="content-deanship" style="background-color: #EC7700">
            <a href="{{URL('/vextension')}}"><img src="{{URL::asset('image/deans/extension.png')}}">
                <span>{{trans('home.extent')}}</span></a>
        </div>
        <div class="content-deanship" style="background-color: #00953E">
            <a href="{{URL('/postgeinvestig')}}"><img src="{{URL::asset('image/deans/postgrade.png')}}">
                <span>{{trans('home.posteinvg')}}</span></a>
        </div>
        <div class="content-deanship" style="background-color: #f6A016">
            <a href="#"><img src="{{URL::asset('image/deans/agreements.png')}}">
                <span>{{trans('home.acadconvens')}}</span></a>
        </div>
    </div>

    <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section"
                 src="{{URL::asset('image/conection.png')}}"><span>{{trans('home.links_interest')}}</span>
        </div>
    </div>
{{--links contents--}}
<div class="content-links">
        <div class="links-interest" style="background-color: #336699">
            <a href="{{url('/offerstudy')}}"><img src="{{URL::asset('image/studying.png')}}">
                <span>{{trans('home.study_offers')}}</span></a>
        </div>
        <div class="links-interest" style="background-color: #336699">
            <a href="https://www.unimarcientifica.edu.ve/adminmoodle/" target="_blank"><img src="{{URL::asset('image/elearning.png')}}">
                <span>{{trans('home.elearning')}}</span></a>
        </div>
        <div class="links-interest" style="background-color: #336699">
            <a href="https://www.unimarcientifica.edu.ve/revista/"><img src="{{URL::asset('image/analisys.png')}}">
                <span>{{trans('home.cientific_unimar')}}</span></a>
        </div>
        <div class="links-interest" style="background-color: #336699">
            <a href="{{URL('/regulations')}}"><img src="{{URL::asset('image/procedure.svg')}}">
                <span>{{trans('home.h-regulations')}}</span></a>
        </div>
    </div>

    <div class="content-links">
        <div class="links-interest" style="background-color: #336699">
            <a href="{{url('/generalsecretariat')}}"><img src="{{URL::asset('image/secretary.png')}}">
                <span>{{trans('home.general-secretary')}}</span></a>
        </div>
        <div class="links-interest" style="background-color: #336699">
            <a href="{{URL('/healthystudent')}}"><img src="{{URL::asset('image/healthy.png')}}">
                <span>{{trans('home.students-healthy')}}</span></a>
        </div>
        <div class="links-interest" style="background-color: #336699">
            <a href="{{url('/healthymental')}}"><img src="{{URL::asset('image/mental-healthy.png')}}">
                <span>{{trans('home.sicologyc-healthy')}}</span></a>
        </div>
        <div class="links-interest" style="background-color: #336699">
            <a href="https://twitter.com/uniradio_unimar?s=20" target="_blank"><img src="{{URL::asset('image/listening.png')}}">
                <span>{{trans('home.uniradio')}}</span></a>
        </div>
    </div><!-- end content-links-->
    
    <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section"
                 src="{{URL::asset('image/map.png')}}"><span>{{trans('home.location')}}</span>
        </div>
    </div>
    {{--location unimar--}}
    <div class="location-content">
        <div class="map-location">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.7972847852143!2d-63.88208018566738!3d10.978668292184503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c318c3b89e345cd%3A0xbaf23c34b11f9d7!2sUniversidad%20De%20Margarita!5e0!3m2!1ses-419!2sve!4v1620079489335!5m2!1ses-419!2sve"
                width="600" height=350" style="border:0;" allowfullscreen=""
                loading="lazy"></iframe>
        </div>
        <div class="map-direction">
            <p>{{trans('home.location-footer')}}</p>
            <p>{{trans('home.location-code')}}</p>
            <p>{{trans('home.location-telf')}}</p>
            <p>{{trans('home.location-code-plus')}}</p>
            <p>{{trans('home.location-mail')}}</p>
        </div>
    </div>
</div>{{--end content--}}
@endsection

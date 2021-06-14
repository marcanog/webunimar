@extends('layouts.layout')

@section('content')
<style>

.d-flex.justify-content-start > span{
    top: .5rem;
}

p {
  animation-duration: 3s;
  animation-name: slidein;
}

@keyframes slidein {
  from {
    margin-left: 100%;
    width: 300%
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}

#cardauthor {
	padding: .5rem;
	height: 215px !important;
}

#imgcrd {
	padding: .5rem;
}

.card-title {
	margin-bottom: .5rem;
	float: right;
	position: relative;
	bottom: 10rem;
}

.card-columns {
	-webkit-column-count: 2;
	-moz-column-count: 2;
	column-count: 2;
	-webkit-column-gap: 1.25rem;
	-moz-column-gap: 1.25rem;
	column-gap: 1.25rem;
    margin: 0 auto;
}

#imgcard {
	color: #4f4f4f !important;
	font-weight: 600;
}

#vext-author{
    font-size: 1.5rem;
}

#vext-authort{
    font-size: 1rem;
}

#vext-email{
    font-size: .75rem;
}

.flex.content-vext {
	justify-content: space-around;
	margin: 1rem auto;
	padding: 0 1.5rem 1rem 0;
}

.col-md-12 #collapse {
	margin: 0 auto;
}

.col-sm-11 .card.card-body {
	text-align: justify;
    margin: 1rem auto;
}

.col-sm-11 .card.card-body p + p {
	text-indent: 1.5em;
	margin-top: 0;
}

/* .collapse.show {
	display: block;
	margin: 0 auto;
} */
#collapse , #collapse2 , #collapse3 {
	margin: 0 auto;
}

</style>
<div class=".xl-container">

    <div class="banner-main">
        <img src="{{asset('./image/Slider1.png')}}">
    </div>

    <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section" src="{{URL::asset('./image/graduate.png')}}"><span>{{trans('vextension.vext-title')}}</span>
        </div>
    </div>

    <p>
    <div class=".xl-container">
        <!-- <p class="titlefound">{{trans('org.authorities')}}</p> -->
        <div class="card-columns col-md-10">
            <a class="btn-link card-img" id="imgcard">
                <div class="card row" id="cardauthor">
                    <div class="col-md-4">
                        <img id="imgcrd" src="{{URL::asset('./image/csuperior/thamaraechegaray.jpg')}}" alt="Ing. Pedro Cabello">
                    </div>
                    <div class="card-title col-md-8">
                        <p id="vext-author">{{trans('vextension.vext-author')}}</p>
                        <p id="vext-authort">{{trans('vextension.vext-author-title')}}</p>
                        <p id="vext-email">{{trans('vextension.vext-mail')}}</p>
                    </div>
                </div>
            </a>
            <a class="btn-link card-img" id="imgcard">
                <div class="card row" id="cardauthor">
                    <div class="col-md-4">
                        <img id="imgcrd" src="{{URL::asset('./image/founders/pedrocabello.jpg')}}" alt="Ing. Pedro Cabello">
                    </div>
                    <div class="card-title col-md-8">
                        <p id="vext-author">{{trans('vextension.vext-asist')}}</p>
                        <p id="vext-authort">{{trans('vextension.vext-atitle')}}</p>
                        <p id="vext-email">{{trans('vextension.vext-asitmail')}}</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex content-vext">
            <div class="links-interest" id="contentimg headingOne" style="background-color: #336699" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                <a id="foundbtn">
                <img src="{{URL::asset('./image/target.svg')}}">
                <span>{{trans('vextension.vext-mision-title')}}</span></a>
            </div>
            <div class="links-interest" id="contentimg headingTwo" style="background-color: #336699" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                <a id="campusbtn">
                <img src="{{URL::asset('./image/settings.svg')}}">
                <span>{{trans('vextension.vext-funtions')}}</span></a>
            </div>
            <div class="links-interest" id="contentimg headingThree" style="background-color: #336699" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                <a id="campusbtn">
                <img src="{{URL::asset('./image/flow-chart.svg')}}">
                <span>{{trans('vextension.vext-subsystems')}}</span></a>
            </div>
        </div>
        <div class="col-md-12" id="contevext">
            <div class="collapse col-sm-11" id="collapse">
                <div class="card card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">{{trans('vextension.vext-mision-title')}}</p>
                    <p> {{trans('vextension.vext-mision')}}</p>
                </div>
            </div>
            <div class="collapse col-sm-11" id="collapse2">
                <div class="card card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('vextension.vext-funtions')}}
                    </p>
                    <p> {{trans('vextension.vext-funtions-1')}}</p>
                    <p> {{trans('vextension.vext-funtions-2')}}</p>
                    <p> {{trans('vextension.vext-funtions-3')}}</p>
                    <p> {{trans('vextension.vext-funtions-4')}}</p>
                    <p> {{trans('vextension.vext-funtions-5')}}</p>
                    <p> {{trans('vextension.vext-funtions-6')}}</p>
                    <p> {{trans('vextension.vext-funtions-7')}}</p>
                    <p> {{trans('vextension.vext-funtions-8')}}</p>
                </div>
            </div>
            <div class="collapse col-sm-11" id="collapse3">
                <div class="card card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">{{trans('vextension.vext-mision-title')}}</p>
                    <p> {{trans('vextension.vext-mision')}}</p>
                </div>
            </div>
        </div>
    </div>
    </p>
</div>
@endsection
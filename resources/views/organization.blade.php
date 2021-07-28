@extends('layouts.layout')

@section('content')
<style>
.titlefound {
	font-size: xx-large;
	color: inherit;
}

p.titlefound{
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

.btn.btn-light#f-btn {
	-webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.2),0 2px 10px 0 rgba(0,0,0,.1);
	box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1),0 2px 10px 0 rgba(0,0,0,.1);
	border-radius: 1rem !important;
    background-color: transparent;
}

#imgcard{
    /* max-width: 12rem;
    /* -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.2),0 2px 10px 0 rgba(0,0,0,.1);
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1),0 2px 10px 0 rgba(0,0,0,.1); */
    /* padding: .5rem; */ 
    text-align: center;
    text-decoration-line: none;
    color: #4f4f4f !important;
}

#cardauthor {
	max-width: 12rem;
	text-align: center;
	border: 1px solid;
	padding: .5rem;
	min-height: 20.5rem;
}

#imgcrd {
	border-radius: 1rem;
	width: 11rem;
	padding: .5rem;
    margin: 0 auto;
}

.card-title {
	margin: 1rem auto;
}

.card-title p {
	margin: 0 auto;
	font-weight: bold;
    font-size: .85rem;
}

#card-b-author {
	border: none !important;
    text-align: justify;
}

#card-b-author p{
    text-indent: 1.5em;
    margin-top: 0;
}

.card-columns{
    -webkit-column-count: 5;
    -moz-column-count: 5;
    column-count: 5;
    -webkit-column-gap: 1.25rem;
    -moz-column-gap: 1.25rem;
    column-gap: 1.25rem;
}
</style>
<div class=".xl-container">
    <div class="banner-main">
        <img src="{{asset('./image/nuestrosfundadores.png')}}">
    </div>
    <div  class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section" src="{{URL::asset('./image/logo-unimar.png')}}"><span>{{trans('org.organizat')}}</span>
        </div>
    </div>
    <div class="content-links">
        <div class="links-interest" id="contentimg headingOne" style="background-color: #336699" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
            <a id="foundbtn">
                <img src="{{URL::asset('./image/student.svg')}}">
                <span>
                    {{trans('org.authorities')}}
                </span>
            </a>
        </div>
        <div class="links-interest" id="contentimg headingTwo" style="background-color: #336699" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
            <a id="campusbtn">
                <img src="{{URL::asset('./image/round-table.svg')}}">
                <span>
                    {{trans('org.university-council')}}
                </span>
            </a>
        </div>
        <div class="links-interest" id="contentimg headingThree" style="background-color: #336699">
            <a id="campusbtn" href="#"><img src="{{URL::asset('./image/target.svg')}}">
            <span>{{trans('org.campus')}}</span></a>
        </div>
        <div class="links-interest" id="contentimg headingFour" style="background-color: #336699">
            <a id="orgbtn" href="#"><img src="{{URL::asset('./image/flow-chart.svg')}}">
            <span>{{trans('org.struct-org')}}</span></a>
        </div>
    </div>

    <div class="container collapse" id="collapse" aria-labelledby="headingOne">
        <p class="titlefound">{{trans('org.superior-council')}}</p>
        <div class="card-columns">
            <a class="btn-link card-img" id="imgcard" data-toggle="collapse" href="#multiCollapse1" role="button" aria-expanded="false" aria-controls="multiCollapse1">
                <div class="card mb-3" id="cardauthor">
                    <img id="imgcrd" src="{{URL::asset('./image/founders/pedrocabello.jpg')}}" alt="Ing. Pedro Cabello">
                    <div class="card-title">
                        <p>{{trans('org.a-peterc')}}</p>
                        <p>{{trans('org.a-peter-title')}}</p>
                    </div>
                </div>
            </a>
            <a class="btn-link card-img" id="imgcard" data-toggle="collapse" href="#multiCollapse2" role="button" aria-expanded="false" aria-controls="multiCollapse2">
                <div class="card mb-3" id="cardauthor">
                    <img id="imgcrd" src="{{URL::asset('./image/founders/pedrobeauperthuy.jpg')}}" alt="Ing. Pedro Beauperthuy">
                    <div class="card-title">
                        <p>{{trans('org.a-peterb')}}</p>
                        <p>{{trans('org.a-peterb-title')}}</p>
                    </div>
                </div>
            </a>
            <a class="btn-link card-img" id="imgcard" data-toggle="collapse" href="#multiCollapse3" role="button" aria-expanded="false" aria-controls="multiCollapse3">
                <div class="card mb-3" id="cardauthor">
                    <img id="imgcrd" src="{{URL::asset('./image/founders/maeugeniamorales.jpg')}}" alt="Esp. Ma Eugenia Morales">
                    <div class="card-title">
                        <p>{{trans('org.a-mamorales')}}</p>
                        <p>{{trans('org.a-mamorales-title')}}</p>
                    </div>
                </div>
            </a>
            <a class="btn-link card-img" id="imgcard" data-toggle="collapse" href="#multiCollapse4" role="button" aria-expanded="false" aria-controls="multiCollapse4">
                <div class="card mb-3" id="cardauthor">
                    <img id="imgcrd" src="{{URL::asset('./image/founders/raquelperez.jpg')}}" alt="Dra. Raquel Pérez">
                    <div class="card-title">
                        <p>{{trans('org.a-raquelp')}}</p>
                        <p>{{trans('org.a-raquelp-title')}}</p>
                    </div>
                </div>
            </a>
            <a class="btn-link card-img" id="imgcard" data-toggle="collapse" href="#multiCollapse5" role="button" aria-expanded="false" aria-controls="multiCollapse5">
                <div class="card mb-3" id="cardauthor">
                    <img id="imgcrd" src="{{URL::asset('./image/founders/anibalgomez.jpg')}}" alt="Ing. Anibal Gómez">
                    <div class="card-title">
                        <p>{{trans('org.a-anibalg')}}</p>
                        <p>{{trans('org.a-anibalg-title')}}</p>
                    </div>
                </div>
            </a>
        </div>    
        <div class="row">
            <div class="col-md-12">
                <div class="collapse multi-collapse" id="multiCollapse1">
                    <div class="card card-body" id="card-b-author">
                        <p>{{trans('org.a-peter-info')}}</p>
                        <p>{{trans('org.a-peter-info-2')}}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="collapse multi-collapse" id="multiCollapse2">
                    <div class="card card-body" id="card-b-author">
                        <p>{{trans('org.a-peterb-info')}}</p>
                        <p>{{trans('org.a-peterb-info-2')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="collapse multi-collapse" id="multiCollapse3">
                    <div class="card card-body" id="card-b-author">
                        <p>{{trans('org.a-mamorales-info')}}</p>
                        <p>{{trans('org.a-mamorales-info-2')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="collapse multi-collapse" id="multiCollapse4">
                    <div class="card card-body" id="card-b-author">
                        <p>{{trans('org.a-raquelp-info')}}</p>
                        <p>{{trans('org.a-raquelp-info-2')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="collapse multi-collapse" id="multiCollapse5">
                    <div class="card card-body" id="card-b-author">
                        <p>{{trans('org.a-anibalg-info')}}</p>
                        <p>{{trans('org.a-anibalg-info-2')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container collapse" id="collapse2" aria-labelledby="headingTwo">
        <p class="titlefound">{{trans('org.university-council')}}</p>
        <div class="card-columns">
            <a class="btn-link card-img" id="imgcard" data-toggle="collapse" href="#multiCollapse1" role="button" aria-expanded="false" aria-controls="multiCollapse1">
                <div class="card mb-3" id="cardauthor">
                    <img id="imgcrd" src="{{URL::asset('./image/csuperior/antonietarosales.jpg')}}" alt="Dra. Antonieta Rosales de Oxford">
                    <div class="card-title">
                        <p>{{trans('org.cs-rector')}}</p>
                        <p>{{trans('org.cs-rector-title')}}</p>
                    </div>
                </div>
            </a>
            <a class="btn-link card-img" id="imgcard" data-toggle="collapse" href="#multiCollapse2" role="button" aria-expanded="false" aria-controls="multiCollapse2">
                <div class="card mb-3" id="cardauthor">
                    <img id="imgcrd" src="{{URL::asset('./image/csuperior/antoniomartinez.jpg')}}" alt="Ing. Antonio Martínez">
                    <div class="card-title">
                        <p>{{trans('org.cs-vice-chancellor')}}</p>
                        <p>{{trans('org.cs-vice-chancellor-title')}}</p>
                    </div>
                </div>
            </a>
            <a class="btn-link card-img" id="imgcard" data-toggle="collapse" href="#multiCollapse3" role="button" aria-expanded="false" aria-controls="multiCollapse3">
                <div class="card mb-3" id="cardauthor">
                    <img id="imgcrd" src="{{URL::asset('./image/csuperior/thamaraechegaray.jpg')}}" alt="Dra. Thamara Echegaray">
                    <div class="card-title">
                        <p>{{trans('org.cs-vicerector-ext')}}</p>
                        <p>{{trans('org.cs-vicerector-ext-title')}}</p>
                    </div>
                </div>
            </a>
            <a class="btn-link card-img" id="imgcard" data-toggle="collapse" href="#multiCollapse4" role="button" aria-expanded="false" aria-controls="multiCollapse4">
                <div class="card mb-3" id="cardauthor">
                    <img id="imgcrd" src="{{URL::asset('./image/csuperior/fannymarcano.jpg')}}" alt="Msc. Fanny Marcano">
                    <div class="card-title">
                        <p>{{trans('org.cs-general-secretary')}}</p>
                        <p>{{trans('org.cs-general-secretary-title')}}</p>
                    </div>
                </div>
            </a>
        </div>    
        <div class="row">
            <div class="col-md-12">
                <div class="collapse multi-collapse" id="multiCollapse1">
                    <div class="card card-body" id="card-b-author">
                        <p>{{trans('org.cs-rector-info')}}</p>
                        <p>{{trans('org.cs-rector-info-2')}}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="collapse multi-collapse" id="multiCollapse2">
                    <div class="card card-body" id="card-b-author">
                        <p>{{trans('org.cs-vice-chancellor-info')}}</p>
                        <p>{{trans('org.cs-vice-chancellor-info-2')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="collapse multi-collapse" id="multiCollapse3">
                    <div class="card card-body" id="card-b-author">
                        <p>{{trans('org.cs-vicerector-ext-info')}}</p>
                        <p>{{trans('org.cs-vicerector-ext-info-2')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="collapse multi-collapse" id="multiCollapse4">
                    <div class="card card-body" id="card-b-author">
                        <p>{{trans('org.cs-general-secretary-info')}}</p>
                        <p>{{trans('org.cs-general-secretary-info-2')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@extends('layouts.layout')

@section('content')
<style>

/* .d-flex.justify-content-start > span{
    top: .5rem;
} */
.d-flex.justify-content-start > span {
	position: relative;
	top: .6rem;
	left: 0.7rem;
	color: #FFFFFF;
	font-weight: 700;
	font-size: 0.95em;
	letter-spacing: 0.025em;
	width: 40%;
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
	margin: 1rem 1.3rem;
	padding: 0 1.5rem 1rem 0;
}

.col-md-12 #collapse {
	margin: 0 auto;
}

.col-sm-11 .card.card-body {
	text-align: justify;
    margin: 1rem auto;
    padding: 2.5rem;
}

.card.card-body ul > li {
	list-style: disc;
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
.info-dept.col-md-10.card.card-body {
	margin: 0 auto;
}

.conten-subsytem > a > img {
	display: flex;
	border-top-right-radius: 20px;
	border-top-left-radius: 20px;
	justify-content: space-around;
	width: 60%;
	margin: 0 auto;
	padding: 1rem;
}
.conten-subsytem {
	display: flex;
	border-radius: 20px;
	border: 1px solid #c1c1c1;
	width: 20%;
    padding: .5rem;
}
#link-subsystem > span {
	display: flex;
	flex: 0 0 25%;
	margin: 1em;
	font-size: 0.95em;
	justify-content: center;
	color: #FFFFFF;
    text-align: center;
}
#link-subsystem > span:hover {
	text-decoration: none;
}
</style>
<div class=".xl-container">

    <div class="banner-main">
        <img src="{{asset('./image/vicextension.png')}}">
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
                        <img id="imgcrd" src="{{URL::asset('./image/csuperior/thamaraechegaray.jpg')}}" alt="Dra. Thamara Echegaray">
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
                        <div style="width:95%; height:180px; background-color: #6699cc; margin: .5rem;">
                            <img id="imgcrd" src="{{URL::asset('./image/avatar.svg')}}" alt="Isabel Luna" style="width:100%; height: 70%; position: relative; top: 1rem;"></div>
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
                    <ul>
                        <li><p> {{trans('vextension.vext-funtions-1')}}</p></li>
                        <li><p> {{trans('vextension.vext-funtions-2')}}</p></li>
                        <li><p> {{trans('vextension.vext-funtions-3')}}</p></li>
                        <li><p> {{trans('vextension.vext-funtions-4')}}</p></li>
                        <li><p> {{trans('vextension.vext-funtions-5')}}</p></li>
                        <li><p> {{trans('vextension.vext-funtions-6')}}</p></li>
                        <li><p> {{trans('vextension.vext-funtions-7')}}</p></li>
                        <li><p> {{trans('vextension.vext-funtions-8')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="collapse col-sm-11" id="collapse3">
                <div class="container col-md-12">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('vextension.vext-subsystems')}}</p>
                    <div class="content-areas">
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#">
                                <img src="{{URL::asset('./image/presentation.svg')}}">
                                <span>{{trans('vextension.vext-educperm')}}</span>
                            </a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/sports.svg')}}">
                            <span>{{trans('vextension.vext-sports')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/history.svg')}}">
                            <span>{{trans('vextension.vext-culture')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/smartphone.png')}}">
                            <span>{{trans('vextension.vext-prom')}}</span></a>
                        </div>
                    </div>
                    <div class="content-areas">
                         <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#">
                                <img src="{{URL::asset('./image/project.svg')}}">
                                <span>{{trans('vextension.vext-sproj')}}</span>
                            </a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/first-aid-kit.svg')}}">
                            <span>{{trans('vextension.vext-ceu')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/listening.png')}}">
                            <span>{{trans('vextension.vext-uniradio')}}</span></a>
                        </div>
                        <div class="conten-subsytem" style="background-color: #6699cc">
                            <a id="link-subsystem" href="#"><img src="{{URL::asset('./image/social-care.png')}}">
                            <span>{{trans('vextension.vext-servcomuny')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="info-dept col-md-10 card card-body">
                <h5>{{trans('vextension.vext-info-title')}}</h5>
                <p><b>{{trans('vextension.vext-info-etitle')}}</b>&nbsp {{trans('vextension.vext-info-email')}}</p>
                <p><b>{{trans('vextension.vext-info-teltit')}}</b>&nbsp{{trans('vextension.vext-info-telf')}}</p>
                <p><b>{{trans('vextension.vext-info-schedtit')}}</b>&nbsp{{trans('vextension.vext-info-sched')}}</p>
            </div>
        </div>
    </div>
    </p>
</div>
@endsection
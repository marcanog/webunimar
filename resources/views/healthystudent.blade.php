@extends('layouts.layout')

@section('content')
    <style>
        .d-flex.justify-content-start > span {
            position: relative;
            top: 0.6rem;
            left: 0.7rem;
            color: #FFFFFF;
            font-weight: 700;
            font-size: 0.95em;
            letter-spacing: 0.025em;
            word-wrap: break-word;
            width: 65%;
        }


        /* .d-flex.justify-content-start > span{
            top: .5rem;
        } */
        /* .d-flex.justify-content-start > span {
            position: relative;
            top: .6rem;
            left: 0.7rem;
            color: #FFFFFF;
            font-weight: 700;
            font-size: 0.95em;
            letter-spacing: 0.025em;
            width: 40%;
        } */

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
        .content-areas.col-12 {
            justify-content: space-evenly;
            margin: 0 auto;
        }
    </style>
    <div class=".xl-container">
        <div class="banner-main">
            <img src="{{asset('./image/nuestrosdecanatos.png')}}">
        </div>
    </div>
    <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section" src="{{URL::asset('./image/healthy.png')}}"><span>{{trans('home.students-healthy')}}</span>
        </div>
    </div>
    <div class=".xl-container">
        <div class="card-columns col-sm-11">
            <a class="btn-link card-img" id="imgcard">
                <div class="card row" id="cardauthor">
                    <div class="col-md-4">
                        <img id="imgcrd" src="{{URL::asset('./image/healthydep/coordhealthy.jpg')}}" alt="Lcda. Angelina Yanez" style="width:100%;">
                    </div>
                    <div class="card-title col-md-8">
                        <p id="vext-author">{{trans('vacademy.vacad-author')}}</p>
                        <p id="vext-authort">{{trans('vacademy.vacad-author-title')}}</p>
                        <p id="vext-email">{{trans('vacademy.vacad-author-email')}}</p>
                    </div>
                </div>
            </a>
            <a class="btn-link card-img" id="imgcard">
                <div class="card row" id="cardauthor">
                    <div class="col-md-4">
                        {{--<img id="imgcrd" src="{{URL::asset('./image/.jpg')}}" alt="Iraida Hernández" style="width:105%; height:12.5rem;">--}}
                        <div style="width:95%; height:180px; background-color: #6699cc; margin: .5rem;">
                            <img id="imgcrd" src="{{URL::asset('./image/avatar.svg')}}" alt="Isabel Luna" style="width:100%; height: 70%; position: relative; top: 1rem;">
                        </div>
                    </div>
                    <div class="card-title col-md-8">
                        <p id="vext-author">{{trans('vacademy.vacad-asist')}}</p>
                        <p id="vext-authort">{{trans('vacademy.vacad-atitle')}}</p>
                        <p id="vext-email">{{trans('vacademy.vacad-asitmail')}}</p>
                    </div>
                </div>
            </a>
        </div>
@endsection

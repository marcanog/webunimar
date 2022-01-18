@extends('layouts.layout')

@section ('content')
    <div class=".xl-container">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/es/newstudents.jpg')}}">
        </div>
        {{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('image/logo-unimar.png')}}"><span>{{trans('newstudents.n-title')}}</span>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.layout')

@section ('content')
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

        #vext-author {
            font-size: 1.5rem;
        }

        #vext-authort {
            font-size: 1rem;
        }

        #vext-email {
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

        #collapse, #collapse2, #collapse3 {
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

        .links-interest {
            width: 20%;
        }

        .content-areas.col-12 {
            justify-content: space-evenly;
            margin: 0 auto;
        }
    </style>
    <div class=".xl-container">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/es/newstudents.jpg')}}">
        </div>
        {{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('image/logo-unimar.png')}}"><span>{{trans('newstudents.n-title')}}</span>
            </div>
        </div>
        <div class="d-flex text-justify m-4">
            <p class="sectionbody">
                {{trans('newstudents.n-descript')}}
            </p>
        </div>
        <div class="d-inline-flex justify-content-around m-4 content-vext">
            {{--Vision--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                 aria-controls="collapse1">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/student.png')}}">
                    <span>{{trans('newstudents.n-pregrade')}}</span>
                </a>
            </div>
            {{--Mission--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/educationv.png')}}">
                    <span>{{trans('newstudents.n-posgrade')}}</span>
                </a>
            </div>
            {{--functions--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/education.svg')}}">
                    <span>{{trans('newstudents.n-equivalnts')}}</span>
                </a>
            </div>
        </div>
        <div class="d-inline-flex justify-content-around flex-column m-4" id="contevext">
            <div class="collapse col-lg-12 m-4" id="collapse">{{--vision--}}
                <div class="card card-body sectionbody">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('postgrade.postg-vision-title')}}
                    </p>
                    <p class="text-justify"> {{trans('postgrade.postg-vision')}}</p>
                </div>
            </div>
            <div class="collapse col-lg-12 m-4" id="collapse2"> {{--mision--}}
                <div class="card card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('postgrade.postg-mission-title')}}
                    </p>
                    <ul>
                        <div class="sectionbody">
                            <p> {{trans('postgrade.postg-mission')}}</p>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="collapse col-lg-12 m-4" id="collapse3"> {{--functions--}}
                <div class="card card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('postgrade.postg-functions')}}
                    </p>
                    <ul>
                        <li><p> {{trans('postgrade.postg-functions-1')}}</p></li>
                        <li><p> {{trans('postgrade.postg-functions-2')}}</p></li>
                        <li><p> {{trans('postgrade.postg-functions-3')}}</p></li>
                        <li><p> {{trans('postgrade.postg-functions-4')}}</p></li>
                        <li><p> {{trans('postgrade.postg-functions-5')}}</p></li>
                        <li><p> {{trans('postgrade.postg-functions-6')}}</p></li>
                    </ul>
                </div>
            </div>
        </div>
    {{--</div>--}}
    </div>
@endsection

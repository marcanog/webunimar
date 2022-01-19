@extends('layouts.layout')

@section ('content')
    <style>
        .links-interest {
            width: 20%;
        }

        #collapse, #collapse2, #collapse3 {
            margin: 0 auto;
        }
    </style>
    <div class=".xl-container">
        <div class="banner-main">
            <img src="{{URL::asset('./image/ourinstitution.png')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('./image/logo-unimar.png')}}">
                <span>{{trans('home.our-intstitution')}}</span>
            </div>
        </div>
        <div class="content-links">
            <div class="links-interest" id="contentimg" style="background-color: #336699">
                <a type="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#modal1" class="open-modal"
                   data-open="modal1"><img src="{{URL::asset('./image/innovation.png')}}">
                    <span>{{trans('ourinstitute.our-concept')}}</span></a>
            </div>
            @include('institution-modal')
            <div class="links-interest" id="contentimg" style="background-color: #336699;"
                 data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                 aria-controls="collapse1">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/target.svg')}}">
                    <span>{{trans('ourinstitute.our-mission-title')}}</span>
                </a>
            </div>
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="campusbtn">
                    <img src="{{URL::asset('./image/eye.svg')}}">
                    <span>{{trans('ourinstitute.our-vision-title')}}</span>
                </a>
            </div>
        </div>
        <div class="content-links">
            <div class="links-interest" id="contentimg" style="background-color: #336699">
                <a href="{{url('/ourhistory')}}"><img src="{{URL::asset('./image/history.svg')}}">
                    <span>{{trans('ourinstitute.our-history-title')}}</span></a>
            </div>
            <div class="links-interest" id="contentimg" style="background-color: #336699">
                <a href="{{url('/simbology')}}"><img src="{{URL::asset('./image/cube.svg')}}">
                    <span>{{trans('ourinstitute.our-identity-title')}}</span></a>
            </div>
            <div class="links-interest" id="contentimg" style="background-color: #336699">
                <a href="{{URL('/organization')}}"><img src="{{URL::asset('./image/flow-chart.svg')}}">
                    <span>{{trans('ourinstitute.our-organization-title')}}</span></a>
            </div>
        </div>
        {{--card body--}}
        <div class="d-inline-flex justify-content-around flex-column m-4" id="contevext">
            <!-- Mission -->
            <div class="collapse" id="collapse">
                <div class="card card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('ourinstitute.our-mission-title')}}
                    </p>
                    <ul>
                        <div class="sectionbody">
                            <li><p> {{trans('ourinstitute.our-mission-1')}}</p></li>
                            <li><p> {{trans('ourinstitute.our-mission-2')}}</p></li>
                            <li><p> {{trans('ourinstitute.our-mission-3')}}</p></li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <!-- vision -->
        <div class="collapse  m-4" id="collapse2">
            <div class="card card-body">
                <p style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('ourinstitute.our-vision-title')}}
                </p>
                <ul>
                    <div class="sectionbody">
                        <li><p> {{trans('ourinstitute.our-vision-1')}}</p></li>
                        <li><p> {{trans('ourinstitute.our-vision-2')}}</p></li>
                        <li><p> {{trans('ourinstitute.our-vision-3')}}</p></li>
                    </div>
                </ul>
            </div>
        </div>

    </div>
@endsection

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
                     src="{{URL::asset('./image/logo-unimar.png')}}"><span>{{trans('home.our-intstitution')}}</span>
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
                <a href="#"><img src="{{URL::asset('./image/history.svg')}}">
                    <span>{{trans('ourinstitute.our-history-title')}}</span></a>
            </div>
            <div class="links-interest" id="contentimg" style="background-color: #336699">
                <a type="nav-link" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img src="{{URL::asset('./image/cube.svg')}}">
                    <span>{{trans('ourinstitute.our-identity-title')}}</span>
                </a>
            </div>
            @include('simbology')
            <div class="links-interest" id="contentimg" style="background-color: #336699">
                <a href="/organization"><img src="{{URL::asset('./image/flow-chart.svg')}}">
                    <span>{{trans('ourinstitute.our-organization-title')}}</span></a>
            </div>
        </div>
        {{--card body--}}
        <div class="d-inline-flex justify-content-around flex-column m-4" id="contevext">
            <div class="collapse col-lg-12" id="collapse">
                <div class="card card-body">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('ourinstitute.our-mission-title')}}
                    </p>
                    <ul>
                        <li><p> {{trans('ourinstitute.our-mission-1')}}</p></li>
                        <li><p> {{trans('ourinstitute.our-mission-2')}}</p></li>
                        <li><p> {{trans('ourinstitute.our-mission-3')}}</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="collapse col-lg-12" id="collapse2">
            <div class="card card-body">
                <p style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('ourinstitute.our-vision-title')}}
                </p>
                <ul>
                    <li><p> {{trans('ourinstitute.our-vision-1')}}</p></li>
                    <li><p> {{trans('ourinstitute.our-vision-2')}}</p></li>
                    <li><p> {{trans('ourinstitute.our-vision-3')}}</p></li>
                </ul>
            </div>
        </div>

        <div class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{trans('ourinstitute.our-simbology')}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{trans('ourinstitute.our-logo')}}</p>
                        <img src="{{url('/image/logo-web-02.png')}}">
                    </div>
                    <div class="modal-footer">
                        <span class="footermodal">"{{trans('ourconcept.our-modal-footer')}}"</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

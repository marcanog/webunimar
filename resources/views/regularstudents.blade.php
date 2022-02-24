@extends('layouts.layout')

@section ('content')
    <div class=".xl-container">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/es/regstudents.jpg')}}">
        </div>
        {{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}"><span>{{trans('regstudents.regstudent-title')}}</span>
            </div>
        </div>
        {{--contents--}}
        <div class="d-inline-flex justify-content-around m-4 content-vext">
            {{--pregrade--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699" role="button">
                <a href="{{url('/pregrade')}}" id="campusbtn">
                    <img src="{{URL::asset('/image/student.png')}}">
                    <span>{{trans('newstudents.n-pregrade')}}</span>
                </a>
            </div>

            {{--grades models--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699"
                 data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/analisys.png')}}">
                    <span>{{trans('regstudents.regstudents-gradesmodels')}}</span>
                </a>
            </div>

            {{--postgrade--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699" role="button">
                <a href="{{url('/postgrade')}}" id="campusbtn">
                    <img src="{{URL::asset('/image/educationv.png')}}">
                    <span>{{trans('newstudents.n-posgrade')}}</span>
                </a>
            </div>

            {{--Alumni--}}
            <div class="links-interest" id="contentimg" style="background-color: #336699" href="" role="button">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/student.svg')}}">
                    <span>{{trans('regstudents.regstudents-alumni')}}</span>
                </a>
            </div>
        </div>
        {{--card bodies--}}
        <div class="collapse col-md-12" id="collapse">
            <div class="container col-md-12">
                <p style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('regstudents.regstudents-gradesmodels')}}</p>
                <div class="content-areas">
                    <div class="conten-subsytem" style="background-color: #6699cc;" data-toggle="collapse"
                         href="#collapse4" role="button" aria-expanded="false"
                         aria-controls="collapse4">
                        <a id="link-subsystem">
                            <img src="{{URL::asset('image/analisys.png')}}">
                            <span>{{trans('regstudents.r-profpractices')}}</span>
                        </a>
                    </div>
                    <div class="conten-subsytem" style="background-color: #6699cc;" data-toggle="collapse"
                         href="#collapse5" role="button" aria-expanded="false"
                         aria-controls="collapse5">
                        <a id="link-subsystem">
                            <img src="{{URL::asset('image/analisys.png')}}">
                            <span>{{trans('regstudents.r-investigation')}}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

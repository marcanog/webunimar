@section('content')
<body>
<div class="content-areas">
    <div class="content-deanship" style="background-color: #BFBABB">
        <a href="#">
            <img src="{{URL::asset('./image/unimar1.jpg')}}">
            <span>{{trans('home.humarte')}}</span>
        </a>
    </div>
     <div class="content-deanship" style="background-color: #E4032C">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>{{trans('home.cjyp')}}</span></a>
    </div>
     <div class="content-deanship" style="background-color: #B22029">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>{{trans('home.cjyp')}}</span></a>
    </div>
     <div class="content-deanship" style="background-color: #003B71">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>{{trans('home.cjyp')}}</span></a>
    </div>
</div>
<div class="content-areas">
    <div class="content-deanship" style="background-color: #00A8E2">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>Estudios Generales</span></a>
    </div>
     <div class="content-deanship" style="background-color: #EC7700">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>Extensión</span></a>
    </div>
     <div class="content-deanship" style="background-color: #00953E">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>Postgrado e Investigación</span></a>
    </div>
     <div class="content-deanship" style="background-color: #f6A016">
        <a href="#"><img src="{{URL::asset('./image/unimar1.jpg')}}">
        <span>Otros Convenios</span></a>
    </div>
</div>
@endsection

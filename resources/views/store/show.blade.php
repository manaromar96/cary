@extends('layout.index')
@section('header')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <style>
        .carousel-inner1 img{
            width: 1140px;
            height: 540px;
        }
    </style>

@endsection

@section('content')

    <h1 align="center">{{$store->name}}</h1>

{{--    <div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">--}}
{{--    <!-- Indicators -->--}}
{{--         <ol class="carousel-indicators">--}}
{{--             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
{{--             <li data-target="#myCarousel" data-slide-to="1"></li>--}}
{{--             <li data-target="#myCarousel" data-slide-to="2"></li>--}}
{{--          </ol>--}}

{{--    <!-- Wrapper for slides -->--}}
{{--        <div class="carousel-inner">--}}


{{--             @foreach($store->images as $image)--}}
{{--                <div class=" @if($loop->first) 'item active' @else 'item' @endif">--}}
{{--                        <img src="{{asset('storage/'.$image->path)}}" alt="store image">--}}
{{--                </div>--}}
{{--            @endforeach--}}


{{--         </div>--}}

{{--    <!-- Left and right controls -->--}}
{{--    <a class="left carousel-control" href="#myCarousel" data-slide="prev">--}}
{{--        <span class="glyphicon glyphicon-chevron-left"></span>--}}
{{--        <span class="sr-only">Previous</span>--}}
{{--    </a>--}}
{{--    <a class="right carousel-control" href="#myCarousel" data-slide="next">--}}
{{--        <span class="glyphicon glyphicon-chevron-right"></span>--}}
{{--        <span class="sr-only">Next</span>--}}
{{--    </a>--}}

{{--    <br>--}}

{{--    <h4>Address: <strong>{{$store->address}}</strong></h4> <br>--}}
{{--    <h4>Cars in store: <strong>{{$store->carsNumber}}</strong></h4> <br>--}}

{{--    <br>--}}



{{--    <div class="row">--}}
{{--        <div class="col-12">--}}
{{--            <a class="btn btn-lg btn-primary" href="{{ route('store.index') }}">Back to store list</a>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('carImages/kia.jpg')}}" alt="Los Angeles">
            </div>

            <div class="item">
                <img src="{{asset('carImages/skoda.jpg')}}" alt="Chicago">
            </div>

            <div class="item">
                <img src="{{asset('carImages/kia.jpg')}}" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



@endsection

@section('footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

@endsection
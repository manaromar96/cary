@extends('dashboardLayout.master')
@section('header')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <style>
        .carousel-inner img{
            width: 1140px;
            height: 540px;
        }
    </style>

@endsection

@section('content')

    <h1 align="center">{{$store->name}}</h1>

    <div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">

    <!-- Indicators -->
         <ol class="carousel-indicators">
             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
             <li data-target="#myCarousel" data-slide-to="1"></li>
             <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

        <div class="clearfix"></div>


        <!-- Wrapper for slides -->
        <div class="carousel-inner">

             @foreach($store->images as $image)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{asset('storage/'.$image->path)}}" alt="store image">
                </div>
            @endforeach


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
    </div>

        <br>


        <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <dl>
                    <dt>
                                <h4>Address : {{$store->address}}</h4> <br>
                    </dt>
                    <dt>
                                <h4>Cars in store : {{$store->carsNumber}}</h4> <br>
                    </dt>
                </dl>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                <a class="btn btn-success btn-block active" href="{{ route('store.index') }}">Back to store list</a>
            </div>
            <div class="col-md-6">
{{--                <a class="btn btn-success btn-block active" href="{{url('car/{{$id}}')}}">Cars List</a>--}}

                <a class="btn btn-success btn-block active" href="{{route('store.showCars',[$store->id])}}">Cars List</a>

            </div>
        </div>
    </div>






@endsection

@section('footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

@endsection
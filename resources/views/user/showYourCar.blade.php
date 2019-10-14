@extends('dashboardLayout.master')
@section('header')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        #myCarousel{
            width: 1140px;
            height: 1000px;
        }
        .carousel-inner img{
            width: 1140px;
            height: 540px;
        }
        .carType{
            padding-right: 209px;
        }
        .carDetails{
            margin-top: -450px;
        }
    </style>

@endsection

@section('content')
                 <h1 class="carType" align="center">{{$car->type}}</h1>

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

                        @foreach($car->carImages as $carImage)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{asset('storage/'.$carImage->photo)}}" alt="car image">
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

                <div class="container-fluid carDetails">
                    <div class="row">
                        <div class="col-md-12">
                                <dt>
                                    <h4>Car Model : {{$car->model}}</h4> <br>
                                </dt>
                                <dt>
                                    <h4>Store : {{$car->store->name}}</h4> <br>
                                </dt>
                                <dt>
                                    <h4>Car Price : {{$car->price}}$</h4> <br>
                                </dt>
                        </div>
                    </div>
                    @canany('show-bill')
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{route('showBill',[$car->id])}}">
                            <button type="button" class="btn btn-success">
                                    Show Bill
                            </button>
                        </a>
                    </div>
                </div>
@endcanany


            </div>
        </div>
    </div>
@endsection
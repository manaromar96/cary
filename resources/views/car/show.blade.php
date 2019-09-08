@extends('layout.index')
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
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">

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

                        @foreach($car->carImages as $image)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{asset('storage/'.$image->photo)}}" alt="store image">
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

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <dl>
                                <dt>
                                    <h4>Car Brand : {{$car->type}}</h4> <br>
                                </dt>
                                <dt>
                                    <h4>Car Model : {{$car->model}}</h4> <br>
                                </dt>
                                <dt>
                                    <h4>Car Color : {{$car->color}}</h4> <br>
                                </dt>
                                <dt>
                                    <h4>Car Price : {{$car->price}}$</h4> <br>
                                </dt>
                            </dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <a class="btn btn-success btn-block active" href="{{ route('car.index') }}">Back to store list</a>
                        </div>
                    </div>
                </div>

                {{--                <table class="table">--}}
{{--                    <tr>--}}
{{--                        <th>Car Brand</th>--}}
{{--                        <th>Car Model</th>--}}
{{--                        <th>Color</th>--}}
{{--                        <th>Price</th>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>{{ $car->type }}</td>--}}
{{--                    --}}

{{--                        <td>{{ $car->model }}</td>--}}


{{--                        <td>{{ $car->color }}</td>--}}


{{--                        <td>{{ $car->price }}$</td>--}}

{{--                    </tr>--}}
{{--                </table>--}}


            </div>
        </div>
    </div>
@endsection
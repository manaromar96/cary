@extends('layout.index')
@section('title','Confirm Purchase Operation')


@section('content')

    <h1 align="center">{{$car->type}}</h1>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>Car Details: </h3>


                <hr>
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

                <a class="btn btn-success btn-block active" href="##">Confirm</a>
            </div>
        </div>
    </div>



    </div>
    </div>
    </div>
@endsection
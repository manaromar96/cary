@extends('dashboardLayout.master')
@section('title','Confirm Purchase Operation')


@section('content')

    <h1 align="center">{{$car->type}}</h1>

    <form action="{{route('sale.store')}}" method="post">
        @csrf
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
                <input type="hidden" value="{{$car->id}}" name="car_id">
                <input type="hidden" value="{{$car->store->id}}" name="store_id">

            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <button  class="btn btn-sm btn-success" type="submit">Confirm</button>
            </div>
        </div>
    </div>
    </form>


    </div>
    </div>
    </div>
@endsection
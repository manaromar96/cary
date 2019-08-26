@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Car Brand</th>
                        <th>Car Model</th>
                        <th>Color</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>{{ $car->type }}</td>
                    

                        <td>{{ $car->model }}</td>


                        <td>{{ $car->color }}</td>


                        <td>{{ $car->price }}</td>

                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a class="btn btn-lg btn-primary" href="{{ route('car.index') }}">Back to car list</a>
        </div>
    </div>
@endsection
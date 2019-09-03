@extends('layout.master')

@section('title','Edit Car Details')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Car details </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('car.update',$car->id) }}" method="post">
                        {{ method_field('put') }}
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Car Brand :</label>
                            <input type="text" class="form-control"  name="type" value="{{ $car->type }}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Car Model :</label>
                            <input type="date" class="form-control"  name="model" value="{{ $car->model }}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Color :</label>
                            <input type="text" class="form-control"  name="color" value="{{ $car->color }}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Price :</label>
                            <input type="number" class="form-control"  name="price" value="{{ $car->price }}"/>
                        </div>


                        <div class="form-footer">
                            <button class="btn btn-primary btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
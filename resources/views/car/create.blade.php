@extends('layout.master')

@section('title','Adding a Car')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('car.store') }}"  method="post" >
                    @csrf
                    <div class="form-group">

                        <label for=" type">
                           Car Brand:
                        </label>
                        <input type="text" class="form-control" id="type" name="type" />
                    </div>

                    <div class="form-group">
                        <label for=" model">
                           Car model:
                        </label>
                        <input type="date" class="form-control" id="model" name="model" />
                    </div>


                    <div class="form-group">

                        <label for="color">
                          Color:
                        </label>
                        <input type="text" name="color">
                    </div>

                    <div class="form-group">

                        <label for="price">
                            Price:
                        </label>
                        <input type="number" name="price">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Add Car
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection

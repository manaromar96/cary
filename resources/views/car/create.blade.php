@extends('dashboardLayout.master')

@section('title','Adding a Car')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('car.store') }}"  method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">

                        <label for=" type">
                            Car Brand:
                        </label>
                        <select name="type" class="form-control">
                            <option disabled selected>Please Select</option>

                            @foreach($brands as $brand)
                                <option id="{{$brand->id}}"> {{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for=" store">
                            Car Store:
                        </label>
                        <select name="store" class="form-control">
                            <option disabled selected>Please Select</option>

                            @foreach($stores as $store)
                                <option id="{{$store->id}}"> {{$store->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=" model">
                            Car model:
                        </label>
                        <select name="model" class="form-control">
                            <option disabled selected>Please Select</option>

                            @foreach($models as $model)
                                <option id="{{$model->id}}"> {{$model->modelYear}}</option>
                            @endforeach
                        </select>
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
                    <div class="form-group">

                        <label for=" photo">
                            Car images
                        </label> <br>

                        <label for="exampleInputFile">
                            File input
                        </label>
                        <input class="form-control-file" id="exampleInputFile" type="file" name='photo' multiple="multiple"/>

                    </div>


                    <button type="submit" class="btn btn-primary">
                        Add Car
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection

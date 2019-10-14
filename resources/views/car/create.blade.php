@extends('dashboardLayout.master')

@section('title','Adding a Car')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('car.store') }}"  method="post" enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                    <div class="form-group">

                        <label for=" type">
                            Car Brand:
                        </label>
                        <select name="type" id="dynamic-select" class="form-control" >
                            <option disabled selected>Please Select</option>

                            @foreach($brands as $brand)
                                <option id="{{$brand->id}}"> {{$brand->name}}</option>
                            @endforeach
                            <option class="newBrand" value="{{route('brand.create')}}">Add New Brand</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for=" store">
                            Car Store:
                        </label>
                        <select name="store_id" class="form-control">
                            <option disabled selected>Please Select</option>
                            @foreach($stores as $store)
                                @if($store->user_id==\Illuminate\Support\Facades\Auth::user()->id)
                                <option value="{{$store->id}}"> {{$store->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=" model">
                            Car model:
                        </label>
                        <select name="model" id="model"  class="form-control">
                            <option disabled selected>Please Select</option>

                            @foreach($models as $model)
                                <option id="{{$model->id}}"> {{Carbon\Carbon::parse($model->modelYear)->format("Y")}}</option>
                            @endforeach
                            <option class="newModel" value="{{route('model.create')}}">Add New model</option>

{{--                            Carbon\Carbon::parse--}}
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
                        <input class="form-control-file" id="exampleInputFile" type="file" name='photo[]' multiple="multiple"/>
                    </div>


                    <button type="submit" class="btn btn-primary">
                        Add Car
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection

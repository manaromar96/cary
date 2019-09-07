@extends('layout.index')

@section('title','Create a new Store')


@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('store.store') }}"  method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">

                        <label for=" storeName">
                            Store Name
                        </label>
                        <input type="text" class="form-control" id="storeName" name="name" />
                    </div>

                    <div class="form-group">

                        <label for=" storeAddress">
                            Store Address
                        </label>
                        <input type="text" class="form-control" id="storeAddress" name="address" />
                    </div>

                    <div class="form-group">

                        <label for=" carNumber">
                            Car Number
                        </label>
                        <input type="number" class="form-control" id="carNumber" name="carsNumber" />
                    </div>


                    <div class="form-group">

                        <label for=" path">
                            Store Images
                        </label> <br>

                        <label for="exampleInputFile">
                            File input
                        </label>
                        <input class="form-control-file" id="exampleInputFile" type="file" name='path[]' multiple="multiple"/>

                    </div>

                    <button type="submit" class="btn btn-primary">
                        Add Store
                    </button>
                </form>
            </div>
        </div>
    </div>

    @endsection

@extends('layout.master')

@section('title','Create Car Brand')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('brand.store') }}"  method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">

                        <label for=" brandName">
                            Car Brand
                        </label>
                        <input type="text" class="form-control" id="brandName" name="name" />
                    </div>


                    <div class="form-group">

                        <label for=" logo">
                            Car Logo
                        </label> <br>

                            <label for="exampleInputFile">
                                File input
                            </label>
                            <input class="form-control-file" id="exampleInputFile" type="file" name='logo' />

                        </div>

                    <button type="submit" class="btn btn-primary">
                        Add brand
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection

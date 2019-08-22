@extends('layout.master')

@section('title','Create Car Brand')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('brand.store') }}"  method="post" >
                    @csrf
                    <div class="form-group">

                        <label for=" brandName">
                            brand Name
                        </label>
                        <input type="text" class="form-control" id="brandName" name="name" />
                    </div>


                    <div class="form-group">

                        <label for=" logo">
                            Car Logo
                        </label>
                        <input type="file" name="logo">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Add brand
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection

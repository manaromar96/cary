@extends('layout.master')

@section('title','Create a new Store')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form role="form">
                    <div class="form-group">

                        <label for=" storeName">
                            Store Name
                        </label>
                        <input type="text" class="form-control" id="storeName" />
                    </div>

                    <div class="form-group">

                        <label for=" storeAddress">
                            Store Address
                        </label>
                        <input type="text" class="form-control" id="storeAddress" />
                    </div>

                    <div class="form-group">

                        <label for=" carNumber">
                            Car Number
                        </label>
                        <input type="number" class="form-control" id="carNumber" />
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Add Store
                    </button>
                </form>
            </div>
        </div>
    </div>

    @endsection

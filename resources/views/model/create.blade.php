@extends('layout.master')

@section('title','Create Car model')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('model.store') }}"  method="post" >
                    @csrf
                    <div class="form-group">

                        <label for=" modelYear">
                            model Year
                        </label>
                        <input type="date" class="form-control" id="modelYear" name="modelYear" />
                    </div>


                    <div class="form-group">

                        <label for=" VIN">
                            Car VIN
                        </label>
                        <input type="number" name="VIN">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Add model
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection

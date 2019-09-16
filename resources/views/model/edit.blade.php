@extends('dashboardLayout.master')

@section('title','Edit a car model')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit A model Car </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('model.update',$model->id) }}" method="post">
                        {{ method_field('put') }}
                        @csrf
                        <div class="form-group">
                            <label class="form-label">model Year</label>
                            <input type="text" class="form-control"  name="modelYear" value="{{ $model->modelYear }}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">model VIN</label>
                            <input type="text" class="form-control"  name="VIN" value="{{ $model->VIN }}"/>
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
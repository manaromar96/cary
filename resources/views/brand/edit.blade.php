@extends('layout.index')

@section('title','Edit a car brand')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit A Brand Car </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('brand.update',$brand->id) }}" method="post"  enctype="multipart/form-data">
                        {{ method_field('put') }}
                        @csrf
                        <div class="form-group">
                            <label class="form-label">brand Name</label>
                            <input type="text" class="form-control"  name="name" value="{{ $brand->name }}"/>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <input type="file" name="logo" value="{{$brand->logo}}" >
                            </div>
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
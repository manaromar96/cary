@extends('layout.master')

@section('title','Edit a Store')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit A STORE</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('store.update',$store->id) }}" method="post">
                        {{ method_field('put') }}
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Store Name</label>
                            <input type="text" class="form-control" placeholder="Country Name" name="name" value="{{ $store->name }}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Store Address</label>
                            <input type="text" class="form-control" placeholder="Country code" name="address" value="{{ $store->address }}"/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">No. of Cars</label>
                            <input type="text" class="form-control" placeholder="Country code" name="carsNumber" value="{{ $store->carsNumber }}"/>
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
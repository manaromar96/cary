@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>store Name</th>
                        <td>{{ $store->name }}</td>
                    </tr>
                    <tr>
                        <th>store Address</th>
                        <td>{{ $store->address }}</td>
                    </tr>
                    <tr>
                        <th>store cars</th>
                        <td>{{ $store->carsNumber }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a class="btn btn-lg btn-primary" href="{{ route('store.index') }}">Back to store list</a>
        </div>
    </div>
@endsection
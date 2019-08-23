@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>brand Name</th>
                        <td>{{ $brand->name }}</td>
                    </tr>
                        <th>logo</th>
                        <td>{{ $brand->logo }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a class="btn btn-lg btn-primary" href="{{ route('brand.index') }}">Back to brand list</a>
        </div>
    </div>
@endsection
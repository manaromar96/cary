@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>model Year</th>
                        <td>{{ $model->modelYear }}</td>
                    </tr>
                        <th>VIN</th>
                        <td>{{ $model->VIN }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a class="btn btn-lg btn-primary" href="{{ route('model.index') }}">Back to model list</a>
        </div>
    </div>
@endsection
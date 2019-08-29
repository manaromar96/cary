@extends('layout.master')

@section('title','List of models')

@section('header')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List of Car model</h3>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table card-table table-striped table-vcenter models">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ModelYear</th>
                            <th>VIN</th>
                            <th>Brand</th>


                            <th width="20%" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tobody>
                            @if(count($models)>0)
                                @foreach($models as $model)
                                    <tr>
                                        <td>{{ $model->id }}</td>
                                        <td>
                                            <a href="{{ route('model.show',$model->id) }}">
                                                {{ $model->modelYear }}
                                            </a>
                                        </td>
                                        <td>{{ $model->VIN }}</td>
                                        <td>{{ $model->brand->name }}</td>


                                        <td>
                                            <a href="{{ route('model.edit',$model->id) }}"
                                               class="btn btn-sm btn-warning">
                                                <i class="fe fe-edit"></i>
                                            </a>
                                            <a href="{{ route('model.show',$model->id) }}"
                                               class="btn btn-sm btn-primary">
                                                <i class="fe fe-eye"></i>
                                            </a>
                                            <form action="{{ route('model.destroy',$model->id) }}" method="post"  class="form-check-inline">
                                                @csrf
                                                {{ method_field('delete') }}
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    <i class="fe fe-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3">No data</td>
                                </tr>
                            @endif
                        </tobody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.models').DataTable();
        });
    </script>
@endsection
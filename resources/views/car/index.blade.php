@extends('layout.index')

@section('title','List of Cars')

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
                    <h3 class="card-title">List of Cars</h3>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table card-table table-striped table-vcenter cars">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Car Brand</th>
                            <th>Car Model</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th width="20%" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tobody>
                            @if(count($cars)>0)
                                @foreach($cars as $car)
                                    <tr>
                                        <td>{{ $car->id }}</td>
                                        <td>
                                            <a href="{{ route('car.show',$car->id) }}">
                                                {{ $car->type }}
                                            </a>
                                        </td>
                                        <td>{{ $car->model }}</td>
                                        <td>{{ $car->color }}</td>
                                        <td>{{ $car->price }}$</td>



                                        <td>
                                            <a href="{{ route('car.edit',$car->id) }}"
                                               class="btn btn-sm btn-warning">
                                                <i class="fe fe-edit form-check-inline"></i>
                                            </a>
                                            <a href="{{ route('car.show',$car->id) }}"
                                               class="btn btn-sm btn-primary">
                                                <i class="fe fe-eye form-check-inline"></i>
                                            </a>
                                            <form action="{{ route('car.destroy',$car->id) }}" method="post"  class="form-check-inline">
                                                @csrf
                                                {{ method_field('delete') }}
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    <i class="fe fe-trash form-check-inline"></i>
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
            $('.cars').DataTable();
        });
    </script>
@endsection
@extends('dashboardLayout.master')

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
                            </tr>
                            </thead>
                            <tobody>
                                @if(count($user->sales)>0)
                                    @foreach($user->sales as $sale)
                                        <tr>
                                            <td>{{ $sale->id }}</td>
                                            <td>
                                                <a href="{{ route('car.show',$user->id) }}">
                                                    {{ $sale->car->type }}
                                                </a>
                                            </td>
                                            <td>{{ $sale->car->model }}</td>
                                            <td>{{ $sale->car->color }}</td>
                                            <td>{{ $sale->car->price }}$</td>



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
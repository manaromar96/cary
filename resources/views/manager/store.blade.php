@extends('dashboardLayout.master')

@section('title','Your stores')

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
                   @if(\Illuminate\Support\Facades\Auth::user()->role_id==1)
                    <h3 class="card-title">All stores</h3>
                       @else
                        <h3 class="card-title">Your stores</h3>
                        @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="store_table">
                            <thead>
                            <tr>
                                <th width="15px">ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>CarsNumber</th>
                                <th>Actions</th>


                            </tr>
                            </thead>
                            <tobody></tobody>
                            @if(count($stores) > 0)
                                @foreach($stores as $store)
                                    <tr>
                                        <td>{{ $store->id }}</td>
                                        <td>
                                            <a href="{{ route('store.show',$store->id) }}">
                                                {{ $store->name }}
                                            </a>
                                        </td>
                                        <td>{{ $store->address }}</td>
                                        <td class="count">{{ $store->carsNumber }}</td>

                                        <td>
                                            <a href="{{ route('store.edit',$store->id) }}"
                                               class="btn btn-sm btn-warning">
                                                <i class="fa fa-edit  form-check-inline"></i>
                                            </a>
                                            <a href="{{ route('store.show',$store->id) }}"
                                               class="btn btn-sm btn-primary">
                                                <i class="fa fa-eye form-check-inline"></i>
                                            </a>
                                            <form action="{{ route('store.destroy',$store->id) }}" method="post" class="form-check-inline">
                                                @csrf
                                                {{ method_field('delete') }}
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    <i class="fa fa-trash form-check-inline"></i>
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

@endsection
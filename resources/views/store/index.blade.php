@extends('layout.master')

@section('title','List of stores')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List of stores</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>CarsNumber</th>

                            <th width="20%" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tobody>
                            @if(count($stores)>0)
                                @foreach($stores as $store)
                                    <tr>
                                        <td>{{ $store->id }}</td>
                                        <td>
                                            <a href="{{ route('store.show',$store->id) }}">
                                                {{ $store->name }}
                                            </a>
                                        </td>
                                        <td>{{ $store->address }}</td>
                                        <td>{{ $store->carsNumber }}</td>

                                        <td>
                                            <a href="{{ route('store.edit',$store->id) }}"
                                               class="btn btn-sm btn-warning">
                                                <i class="fe fe-edit"></i>
                                            </a>
                                            <a href="{{ route('store.show',$store->id) }}"
                                               class="btn btn-sm btn-primary">
                                                <i class="fe fe-eye"></i>
                                            </a>
                                            <a href="{{ route('store.destroy',$store->id) }}"
                                               class="btn btn-sm btn-danger">
                                                <i class="fe fe-trash"></i>
                                            </a>
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
@endsection
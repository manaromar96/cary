@extends('layout.master')

@section('title','List of brands')

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
                    <h3 class="card-title">List of Car Brand</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Logo</th>


                            <th width="20%" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tobody>
                            @if(count($brands)>0)
                                @foreach($brands as $brand)
                                    <tr>
                                        <td>{{ $brand->id }}</td>
                                        <td>
                                            <a href="{{ route('brand.show',$brand->id) }}">
                                                {{ $brand->name }}
                                            </a>
                                        </td>
                                        <td> <img src="../storage/public/brand/logo/{{$brand->logo}}" alt="KIA" width="50px" height="50px"></td>


                                        <td>
                                            <a href="{{ route('brand.edit',$brand->id) }}"
                                               class="btn btn-sm btn-warning">
                                                <i class="fe fe-edit"></i>
                                            </a>
                                            <a href="{{ route('brand.show',$brand->id) }}"
                                               class="btn btn-sm btn-primary">
                                                <i class="fe fe-eye"></i>
                                            </a>
                                            <form action="{{ route('brand.destroy',$brand->id) }}" method="post" class="form-check-inline">
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
@endsection
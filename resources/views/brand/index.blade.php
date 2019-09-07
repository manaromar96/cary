@extends('layout.index')

@section('title','List of brands')

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
                    <h3 class="card-title">List of Car Brands</h3>
                </div>
                <div class="card-body">
                    <div class="tableesp-ronsive">
                        <table class="table card-table table-striped table-vcenter brands">
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

                                <td>  <a href="{{ route('brand.show',$brand->id) }}" class="mb-3">
                                        <img src="{{asset('storage/'.$brand->logo )}}" width="50px" height="50px">
                                </a>
                                </td>

                                <td>
                                    <a href="{{ route('brand.edit',$brand->id) }}"
                                       class="btn btn-sm btn-warning">
                                        <i class="fe fe-edit form-check-inline"></i>
                                    </a>
                                    <a href="{{ route('brand.show',$brand->id) }}"
                                       class="btn btn-sm btn-primary">
                                        <i class="fe fe-eye form-check-inline"></i>
                                    </a>
                                    <form action="{{ route('brand.destroy',$brand->id) }}" method="post" class="form-check-inline">
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
            $('.brands').DataTable();
        });
    </script>
@endsection
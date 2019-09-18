@extends('dashboardLayout.master')

@section('title','Manager Profile')
@section('header')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

@endsection
@section('content')

{{--    @if($user->role ==  'Manager')--}}
{{--        --}}
{{--    @elseif($user->role ==  'Manager')--}}
    <div  class="personalInformation">

        <h2> {{\Illuminate\Support\Facades\Auth::user()->name}} Profile</h2>

        <br>
        <h5> Personal Information :</h5>

        <br>
        <!-- Personal Info -->
        <ul class="personal-info">
            <li>
                <p> <span> <strong> Name : </strong></span>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
            </li>

            <li>
                <p> <span><strong> E-mail :</strong> </span> <a href="#.">{{\Illuminate\Support\Facades\Auth::user()->email}}</a> </p>
            </li>
            <li>
                <p> </spa> <strong>Phone :</strong> </span>{{\Illuminate\Support\Facades\Auth::user()->phone}}</p>
            </li>

        </ul>

    </div>
    <div class="actions">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h3>
                            {{\Illuminate\Support\Facades\Auth::user()->name}}! <small>Do Your Action : </small>
                        </h3>
                    </div>
                    <br>
                    <br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{route('user.showStore',[\Illuminate\Support\Facades\Auth::user()->id])}}">
                                    <button type="button" class="btn btn-success">
                                         View Your Store
                                     </button>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="/store/create">
                                    <button type="button" class="btn btn-success">
                                    Add New Stor
                                </button>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="/car">
                                    <button type="button" class="btn btn-success">
                                    View Your Cars
                                </button>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="car/create">
                                    <button type="button" class="btn btn-success">
                                    Add New Car
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
{{--                    <div class="btn-group" role="group">--}}

{{--                        <a href="/store">--}}
{{--                        <button  class="btn btn-secondary" type="button">--}}
{{--                            View Your Store--}}
{{--                        </button>--}}
{{--                        </a>--}}

{{--                        <a href="/store/create">--}}
{{--                        <button class="btn btn-secondary" type="button">--}}
{{--                          Add New Store--}}
{{--                        </button>--}}
{{--                        </a>--}}

{{--                        <a href="/car">--}}
{{--                        <button class="btn btn-secondary" type="button">--}}
{{--                            View Your Cars--}}
{{--                        </button>--}}
{{--                        </a>--}}


{{--                        <a href="car/create">--}}
{{--                        <button class="btn btn-secondary" type="button">--}}
{{--                          Add New Car--}}
{{--                        </button>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        
    </div>
@endsection
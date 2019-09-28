@extends('dashboardLayout.master')

@section('title','Manager Profile')
@section('header')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <style>
        .update {
            margin-left: 751px;
            margin-top: -85px;
        }
    </style>
@endsection
@section('content')

    <div  class="personalInformation">

        <h2> {{$user->name}} Profile</h2>

        <br>

        <h5> Personal Information :</h5>

        <br>
        <!-- Personal Info -->
        <ul class="personal-info">
            <li>
                <p> <span> <strong> Name : </strong></span>{{$user->name}}</p>
            </li>

            <li>
                <p> <span><strong> E-mail :</strong> </span> <a href="#.">{{$user->email}}</a> </p>
            </li>
            <li>
                <p> </spa> <strong>Phone :</strong> </span>{{$user->phone}}</p>
            </li>

        </ul>

    </div>

    <div class="actions">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                @if($user->role_id==2)
                                <a href="{{route('manager.showStore',[$user->id])}}">
                                    <button type="button" class="btn btn-success">
                                        View User Store
                                    </button>
                                </a>
                                    @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
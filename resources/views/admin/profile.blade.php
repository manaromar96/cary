@extends('dashboardLayout.master')

@section('title','Admin Profile')
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

{{--    @if($user->role ==  'Manager')--}}
{{--        --}}
{{--    @elseif($user->role ==  'Manager')--}}
    <div  class="personalInformation">
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-3">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3">--}}

{{--                            <button type="button" class="btn btn-success">--}}
{{--                                Button--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <h2> {{\Illuminate\Support\Facades\Auth::user()->name}} Profile</h2>

        <br>
        <div class="col-md-3" >
            <a href="{{ route('manager.edit',$user->id) }}">
                 <button type="button" class="btn btn-warning update">
                Update Profile
            </button>
            </a>
        </div>

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
@endsection
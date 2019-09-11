@extends('layout.index')

@section('title','Manager Profile')
@section('header')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

@endsection
@section('content')


    <div  class="personalInformation">

        <h3> Welcome to  {{\Illuminate\Support\Facades\Auth::user()->name}} Profile</h3>

        <br>
        <h5> Personal Information :</h5>

        <br>
        <!-- Personal Info -->
        <ul class="personal-info">
            <li>
                <p> <span> Name : </span>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
            </li>
{{--            <li>--}}
{{--                <p> <span> Phone : </span>{{\Illuminate\Support\Facades\Auth::user()->phone}}</p>--}}
{{--            </li>--}}
            <li>
                <p> <span> E-mail : </span> <a href="#.">{{\Illuminate\Support\Facades\Auth::user()->email}}</a> </p>
            </li>
        </ul>

    </div>
    <div class="actions">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>
                            {{\Illuminate\Support\Facades\Auth::user()->name}}! <small>Do Your Action : </small>
                        </h1>
                    </div>
                    <div class="btn-group" role="group">

                        <a href="/store">
                        <button  class="btn btn-secondary" type="button">
                            View Your Store
                        </button>
                        </a>

                        <a href="/store/create">
                        <button class="btn btn-secondary" type="button">
                          Add New Store
                        </button>
                        </a>

                        <a href="/car">
                        <button class="btn btn-secondary" type="button">
                            View Your Cars
                        </button>
                        </a>


                        <a href="car/create">
                        <button class="btn btn-secondary" type="button">
                          Add New Car
                        </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection
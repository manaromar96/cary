@extends('dashboardLayout.master')
@section('content')
    <div class="row">
        <div class=" col-md-12" align="center">
        <h1 style=" font-family: 'Comic Sans MS';color: #000000">Client Dashboard</h1>
    </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-4" >
                <div class="card card-chart" style="background-color: #d6f695">
                    <div class="card-header">
                        <h5 class="card-category" style="font-family: 'Comic Sans MS'"> Car</h5>
                        <h4 class="card-title" style="font-family: 'Comic Sans MS'" >My Car</h4>
                    </div>
                    <img src="{{asset('aStar/images/car.png')}}">
                    <div class="card-footer"  style="background-color: #d6f695">
                        <div class="stats">
                            <i class="now-ui-icons arrows-1_refresh-69" style="font-family: 'Comic Sans MS'"> Number Of My Car :{{count($sales)}}</i>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    @endsection







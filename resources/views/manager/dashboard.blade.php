@extends('dashboardLayout.master')
@section('content')
    <div class="row">
        <div class=" col-md-12" align="center">
        <h1 style=" font-family: 'Comic Sans MS';color: #000000">Manager Dashboard</h1>
    </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-4" >
                <div class="card card-chart" style="background-color: #d6f695">
                    <div class="card-header">
                        <h5 class="card-category" style="font-family: 'Comic Sans MS'"> Sales</h5>
                        <h4 class="card-title" style="font-family: 'Comic Sans MS'" >My Sales</h4>
                    </div>
                    <img src="{{asset('aStar/images/car.png')}}">
                    <div class="card-footer"  style="background-color: #d6f695">
                        <div class="stats">
                            <i class="now-ui-icons arrows-1_refresh-69" style="font-family: 'Comic Sans MS'"> Number Of My Sale : {{count($data)}}</i>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="card card-chart"  style="background-color: #d6f695">
                    <div class="card-header">
                        <h5 class="card-category" style="font-family: 'Comic Sans MS'">Stores</h5>
                        <h4 class="card-title" style="font-family:'Comic Sans MS'">My Stores</h4>
                    </div>
                    <img src="{{asset('aStar/images/store.PNG')}}">
                    <div class="card-footer"  style="background-color: #d6f695">
                        <div class="stats">
                            <i class="now-ui-icons arrows-1_refresh-69" style="font-family: 'Comic Sans MS'">Number Of My Store : {{count($stores)}}</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-chart"  style="background-color: #d6f695">
                    <div class="card-header">
                        <h5 class="card-category"style="font-family: 'Comic Sans MS'">Cars</h5>
                        <h4 class="card-title"style="font-family: 'Comic Sans MS'">My Cars</h4>
                    </div>
                    <img src="{{asset('aStar/images/cars.png')}}">

                    <div class="card-footer"  style="background-color: #d6f695">
                        <div class="stats">
                            <i class="now-ui-icons arrows-1_refresh-69" style="font-family: 'Comic Sans MS'">Number Of My Car :{{count($cars)}}</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection







@extends('dashboardLayout.master')
@section('content')
    <div class="row">
        <div class=" col-md-12" align="center">
        <h1 style=" font-family: 'Comic Sans MS';color: #000000">Client Dashboard</h1>
    </div>
    </div>
    <div class="content">
        <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-2">
                            <i class="pe-7f-cart"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{count($sales)}}</span></div>
                                <div class="stat-heading">Sales</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="wi wi-horizon-alt"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="">{{number_format((($weather->currently->temperature)-32)/1.8,0)}}°</span></div>
                                <div class="stat-heading">Temperature</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </div>
    @endsection







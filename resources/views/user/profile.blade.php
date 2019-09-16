@extends('dashboardLayout.master')
@section('header')
    <style>
        .infoForm{
            margin: 150px;
        }
        .kt-grid__item kt-grid__item--fluid kt-app__content{
            background-color: honeydew;
        }
        .right-panel{
            /*margin-top:-95px;*/
            background: honeydew;
            margin-left: 280px;
            margin-top: -56px;
        }
    </style>
@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">




        <!--Begin:: App Content-->
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">


            <form class="kt-form kt-form--label-right infoForm">
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="kt-section__body">
                            <div class="row">
                                <div class="kt-portlet__head-label">
                                    <h6 class="kt-portlet__head-title"><strong>Personal Information</strong></h6>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input class="form-control" type="text" value="Nick">
                                </div>
                            </div>

                            <div class="row">
                                <div class="kt-portlet__head-label">
                                    <h6 class="kt-portlet__head-title"><strong>Contact Information</strong></h6>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                        <input type="text" class="form-control" value="+35278953712" placeholder="Phone" aria-describedby="basic-addon1">
                                    </div>
                                    <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                        <input type="text" class="form-control" value="nick.bold@loop.com" placeholder="Email" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-lg-3 col-xl-3">
                            </div>
                            <div class="col-lg-9 col-xl-9">
                                <button type="reset" class="btn btn-primary">update</button>&nbsp;
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--End:: App Content-->


    </div>
@endsection
@extends('dashboardLayout.master')
@section('header')
    <style>
        .infoForm{
            margin: 150px;
        }
    </style>
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">



        <!--Begin:: App Aside-->
        <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside" style="opacity: 1;">
            <!--begin:: Widgets/Applications/User/Profile1-->
            <div class="kt-portlet ">
                <div class="kt-portlet__head  kt-portlet__head--noborder">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                            <i class="flaticon-more-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
                            <!--begin::Nav-->
                            <ul class="kt-nav">
                                <li class="kt-nav__head">
                                    Export Options
                                    <span data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
        <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"></rect>
        <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"></rect>
    </g>
</svg>        </span>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                        <span class="kt-nav__link-text">Activity</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                        <span class="kt-nav__link-text">FAQ</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                        <span class="kt-nav__link-text">Settings</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                        <span class="kt-nav__link-text">Support</span>
                                        <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
            </span>
                                    </a>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__foot">
                                    <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
                                </li>
                            </ul>
                            <!--end::Nav-->			</div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Applications/User/Profile1-->

        </div>
        <!--End:: App Aside-->

        <!--Begin:: App Content-->
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
            <div class="row" align="center" content="center">
                            <h6 class="kt-portlet__head-title"><strong>Personal Information</strong></h6>
            </div>

                        <form class="kt-form kt-form--label-right infoForm">
                            <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">

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
            </div>
        </div>
        <!--End:: App Content-->
    </div>
    <!--End::App-->


</div>
    @endsection
@extends('layout.master')

@section('title',"Home Pages")

@section('content')
    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 ml-auto">
                    <form class="input-icon my-3 my-lg-0">
                        <input type="search" class="form-control header-search" placeholder="Search&hellip;"
                               tabindex="1">
                        <div class="input-icon-addon">
                            <i class="fe fe-search"></i>
                        </div>
                    </form>
                </div>
                <div class="col-lg order-lg-first">
                    <ul class="nav nav-tabs border-0 flex-column flex-lg-row">

                        <li class="nav-item">
                            <a href="/store" class="nav-link">
                                <i class="fe fe-home"></i> Stores </a>

                        </li>
                        <li class="nav-item">
                            <a href="/car" class="nav-link">
                                <i class="fe fe-credit-card"></i>Cars </a>

                        </li>

                        <li class="nav-item">
                            <a href="/about" class="nav-link">
                                <i class="fe fe-file-text"></i>About Us </a>

                        </li>

                        <li class="nav-item">
                            <a href="/contact" class="nav-link">
                                <i class="fe fe-phone-call"></i>Contact </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
{{--@extends('dashboardLayout.master')--}}

{{--@section('title'," Contact Us ")--}}
{{--@section('nav')--}}
{{--@endsection--}}
{{--@section('content')--}}

{{--    <h1>Talk to us</h1>--}}
{{--    <label > <strong>Email :</strong></label>--}}
{{--    <span>eng.esraa93@hotmail.com</span>--}}
{{--    <br>--}}
{{--    <label><strong>Mobile :</strong></label>--}}
{{--    <span>+970 599XX XXXX</span>--}}
{{--@endsection--}}
        <!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('dashboard/assets/images/favicon.png')}}">
    <link rel="shortcut icon" href="{{asset('dashboard/assets/images/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('dashboard/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/pe-icon-7-filled.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/cs-skin-elastic.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('dashboard/assets/css/bootstrap-select.less)}}"> --}}
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js')}}"></script> -->
    <style>
        label{
            color: white;
            font-size: 17px;
            font-weight: bold;
        }

    </style>
</head>
<body class="bg-dark">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="/">
                    <img class="align-content" src="{{asset('dashboard/assets/images/cary.logo.png')}}" alt="">
                </a>
            </div>

            <form action="{{ route('contact.store') }}"  method="post"  class="contactForm">
                @csrf
                <div class="form-group">
                    <label>Name :</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email :</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Message :</label>
                    <textarea name="message" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>


            </form>
        </div>
    </div>
</div>


<script src="{{asset('dashboard/assets/js/vendor/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/popper.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/plugins.js')}}"></script>
<script src="{{asset('dashboard/assets/js/main.js')}}"></script>


</body>
</html>
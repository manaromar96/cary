<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cary Store</title>
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
{{--    <link rel="stylesheet" href="{{asset('dashboard/assets/css/bootstrap-select.less"> --}}
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js')}}"></script> -->

</head>
<body class="bg-dark">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="{{asset('dashboard/assets/images/cary.logo.png')}}" alt="">
                </a>
            </div>
            <div class="login-form">
                <form method="POST" action="{{ route('createRegister') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>User Name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone </label>
                                <input id="phone" type="number" class="form-control "name="phone" autofocus>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="user_type">{{ __('auth.user_type') }}</label>
                                <div class="col-md-12">
                                    <select name="role_id" class="form-control" required>
                                        <option value="-1">Please select</option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}">
                                                {{$role->name}}
                                            </option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Agree the terms and policy
                                </label>
                            </div>
                        </div>
                    </div>

                    <button  type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Register</button>
                    {{--                    <div class="social-login-content">--}}
                    {{--                        <div class="social-button">--}}
                    {{--                            <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Register with facebook</button>--}}
                    {{--                            <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Register with twitter</button>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="register-link m-t-15 text-center">
                        <p>Already have account ? <a href="{{route('login')}}"> Sign in</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<script src="{{asset('assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>


</body>
</html>

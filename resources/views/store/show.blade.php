@extends('layout.index')
@section('header')

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        .carousel-inner img{
            width: 1140px;
            height: 540px;
        }
    </style>
    {{--    <meta name="viewport" content="width=device-width">--}}
{{--    <link rel="stylesheet" href="{{asset('assets/css/example.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">--}}

{{--    <style>--}}
{{--        body {--}}
{{--            -webkit-font-smoothing: antialiased;--}}
{{--            font: normal 15px/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;--}}
{{--            color: #232525;--}}
{{--            padding-top:70px;--}}
{{--        }--}}

{{--        #slides {--}}
{{--            display: none--}}
{{--        }--}}

{{--        #slides .slidesjs-navigation {--}}
{{--            margin-top:3px;--}}
{{--        }--}}

{{--        #slides .slidesjs-previous {--}}
{{--            margin-right: 5px;--}}
{{--            float: left;--}}
{{--        }--}}

{{--        #slides .slidesjs-next {--}}
{{--            margin-right: 5px;--}}
{{--            float: left;--}}
{{--        }--}}

{{--        .slidesjs-pagination {--}}
{{--            margin: 6px 0 0;--}}
{{--            float: right;--}}
{{--            list-style: none;--}}
{{--        }--}}

{{--        .slidesjs-pagination li {--}}
{{--            float: left;--}}
{{--            margin: 0 1px;--}}
{{--        }--}}

{{--        .slidesjs-pagination li a {--}}
{{--            display: block;--}}
{{--            width: 13px;--}}
{{--            height: 0;--}}
{{--            padding-top: 13px;--}}
{{--           // background-image: url(img/pagination.png);--}}
{{--            background-position: 0 0;--}}
{{--            float: left;--}}
{{--            overflow: hidden;--}}
{{--        }--}}

{{--        .slidesjs-pagination li a.active,--}}
{{--        .slidesjs-pagination li a:hover.active {--}}
{{--            background-position: 0 -13px--}}
{{--        }--}}

{{--        .slidesjs-pagination li a:hover {--}}
{{--            background-position: 0 -26px--}}
{{--        }--}}

{{--        #slides a:link,--}}
{{--        #slides a:visited {--}}
{{--            color: #333--}}
{{--        }--}}

{{--        #slides a:hover,--}}
{{--        #slides a:active {--}}
{{--            color: #9e2020--}}
{{--        }--}}

{{--    </style>--}}
{{--    <style>--}}
{{--        #slides {--}}
{{--            display: none--}}
{{--        }--}}

{{--        .container {--}}
{{--            margin: 0 auto--}}
{{--        }--}}

{{--        /* For tablets & smart phones */--}}
{{--        @media (max-width: 767px) {--}}
{{--            body {--}}
{{--                padding-left: 20px;--}}
{{--                padding-right: 20px;--}}
{{--            }--}}
{{--            .container {--}}
{{--                width: auto--}}
{{--            }--}}
{{--        }--}}

{{--        /* For smartphones */--}}
{{--        @media (max-width: 480px) {--}}
{{--            .container {--}}
{{--                width: auto--}}
{{--            }--}}
{{--        }--}}

{{--        /* For smaller displays like laptops */--}}
{{--        @media (min-width: 768px) and (max-width: 979px) {--}}
{{--            .container {--}}
{{--                width: 724px--}}
{{--            }--}}
{{--        }--}}

{{--        /* For larger displays */--}}
{{--        @media (min-width: 1200px) {--}}
{{--            .container {--}}
{{--                width: 1170px--}}
{{--            }--}}
{{--        }--}}
{{--    </style>--}}


@endsection

@section('content')

{{--    <div class="container">--}}
{{--        <div id="slides">--}}
{{--            <img src="{{asset('assets/images/storeImage/example-slide-1.jpg')}}" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/" class="slidesjs-slide" slidesjs-index="0">--}}
{{--            <img src="{{asset('assets/images/storeImage/example-slide-3.jpg')}}" alt="Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/" class="slidesjs-slide" slidesjs-index="1">--}}
{{--            <img src="{{asset('assets/images/storeImage/example-slide-1.jpg')}}" alt="Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/" class="slidesjs-slide" slidesjs-index="2">--}}
{{--            <img src="{{asset('assets/images/storeImage/example-slide-3.jpg')}}" alt="Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/" class="slidesjs-slide" slidesjs-index="3">--}}
{{--        </div>--}}
{{--        <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>--}}
{{--        <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>--}}
{{--        <ul class="slidesjs-pagination"><li class="slidesjs-pagination-item"><a href="#" data-slidesjs-item="0" class="">1</a></li><li class="slidesjs-pagination-item"><a href="#" data-slidesjs-item="1" class="">2</a></li><li class="slidesjs-pagination-item"><a href="#" data-slidesjs-item="2" class="">3</a></li><li class="slidesjs-pagination-item"><a href="#" data-slidesjs-item="3" class="active">4</a></li></ul>--}}

{{--    </div>--}}

<h1 align="center">{{$store->name}}</h1>

<div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">


        @foreach($store->images as $image)
            <?php $class = $loop->first ? 'item active': 'item'; ?>

                <div class="{{$class}}">
                        <img src="{{asset('storage/'.$image->path)}}" alt="store image">
                </div>
        @endforeach


    </div>

{{--        <div class="item">--}}
{{--               <img src="{{asset('storage/images/' .$store->path)}}" alt="Chicago">--}}
{{--            <img src="{{asset('storage/store/images'.$store->path )}}" width="50px" height="50px">--}}


{{--        </div>--}}

{{--        <div class="item">--}}
{{--            <img src="{{asset('assets/images/storeImage/bdwan.jpg')}}" alt="New York">--}}
{{--            <img src="{{asset('storage/store/images'.$store->path )}}" width="50px" height="50px">--}}

{{--        </div>--}}

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<br>
<h4>Address: <strong>{{$store->address}}</strong></h4> <br>
<h4>Cars in store: <strong>{{$store->carsNumber}}</strong></h4> <br>

<br>



    <div class="row">
        <div class="col-12">
            <a class="btn btn-lg btn-primary" href="{{ route('store.index') }}">Back to store list</a>
        </div>
    </div>



@endsection
{{--@section('footer')--}}
{{--    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>--}}
{{--    <script src="{{asset('assets/js/jquery.slides.min.js')}}"></script>--}}

{{--    <script>--}}
{{--        $(function() {--}}
{{--            $('#slides').slidesjs({--}}
{{--                width: 940,--}}
{{--                height: 528,--}}
{{--                navigation: false--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--    @endsection--}}
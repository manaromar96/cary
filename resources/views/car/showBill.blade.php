@extends('dashboardLayout.master')
@section('title','Bill Address')
@section('header')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial;
            font-size: 17px;
            padding: 8px;
        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }
            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-75">
            <div class="container">
                <form>
                    @csrf
                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <br>
                            <label for="name"><i class="fa fa-user"></i>Your Name</label>

                            <input type="text" id="email" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" readonly>


                            <label for="email"><i class="fa fa-envelope"></i>Your Email</label>

                                        <input type="text" id="email" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" readonly>
{{--                                                             <label for="name"><i class="fa fa-user"></i>Store Manager</label>--}}
{{--                            <input type="text" id="name" name="name" value="{{$car->store->user->name}}" readonly>--}}
                            <label for="email"><i class="fa fa-envelope"></i>Store Name</label>
                            <input type="text" id="email" name="email" value="{{$car->store->name}}" readonly>

                            <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="address" name="address" value="{{$car->store->address}}" readonly>


                        </div>

                        <div class="col-50">
                            <h3>Car Details</h3>
                            <br>
                            <label for="type">Car Type</label>
                            <input type="text" id="type" name="type" value="{{$car->type}}" readonly>
                            <label for="model">Car Model</label>
                            <input type="number" id="model" name="model" value="{{$car->model}}" readonly>
                            <label for="color">Color</label>
                            <input type="text" id="color" name="color" placeholder="{{$car->color}}" readonly>
                            <label for="price" ><i class="fa fa-money"></i> Price</label>
                            <input type="number" class="price" id="price" name="price" value="{{$car->price}}" readonly>
                        </div>

                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                    </label>
                    <div class="row">
                        <div class="col-md-4 " ></div>
                        <div class="col-md-4 " >
                            <button type="button" value="Print"  class="btn btn-warning"
                                    onclick="window.print()"> Print Bill </button>
                        </div>
                    </div>



                </form>
            </div>
        </div>
        <div class="col-25">
            <div class="container">
                <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>1</b></span></h4>
                <br>
                <p><a href="{{route('car.buyCar',[$car->id]) }}">{{$car->type}}</a> <span class="price">{{$car->price}}</span></p>
                <hr>
                <p>Total <span class="price" style="color:black"><b>{{$car->price}}</b></span></p>
            </div>
        </div>
    </div>

@endsection




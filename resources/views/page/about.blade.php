{{--@extends('dashboardLayout.master')--}}

{{--@section('title'," About Us ")--}}
{{--@section('nav')--}}
{{--    @endsection--}}
{{--@section('content')--}}

{{--    <h1> <em>Who are we ?!</em></h1>--}}
{{--    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.--}}
{{--        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently--}}
{{--        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>--}}
{{--@endsection--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cary</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="aStar Fashion Template Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('aStar/styles/bootstrap-4.1.3/bootstrap.min.css')}}">
    <link href="{{asset('aStar/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('aStar/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('aStar/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('aStar/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('aStar/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('aStar/styles/responsive.css')}}">
    <style>
        .home_title{
            color: white;
            font-size: 40px;
            margin-top: 75px;
            margin-bottom: 115px;
        }
        .newsletter_title{
            font-size: 30px;
            color:#BBE434;
        }
        .footer_logo a > div span,
        .sidebar_logo a > div span{
            text-transform: lowercase;
        }
        .options{
            hieght:90px;
        }
    </style>
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_content d-flex flex-row align-items-center justify-content-start">

            <!-- Hamburger -->
            <div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

            <!-- Logo -->
            <div class="header_logo">
                <a href="#"><div>a<span>star</span></div></a>
            </div>

            <!-- Navigation -->
            <nav class="header_nav">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="index.html">home</a></li>
                    <li><a href="#">woman</a></li>
                    <li><a href="#">man</a></li>
                    <li><a href="#">lookbook</a></li>
                    <li><a href="#">blog</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </nav>

            <!-- Header Extra -->
            <div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

                <!-- Language -->
            {{--                <div class="info_languages has_children">--}}
            {{--                    <div class="language_flag"><img src="{{asset('aStar/images/flag_1.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
            {{--                    <div class="dropdown_text">english</div>--}}
            {{--                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>--}}

            {{--                    <!-- Language Dropdown Menu -->--}}
            {{--                    <ul>--}}
            {{--                        <li><a href="#">--}}
            {{--                                <div class="language_flag"><img src="{{asset('aStar/images/flag_2.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
            {{--                                <div class="dropdown_text">french</div>--}}
            {{--                            </a></li>--}}
            {{--                        <li><a href="#">--}}
            {{--                                <div class="language_flag"><img src="{{asset('aStar/images/flag_3.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
            {{--                                <div class="dropdown_text">japanese</div>--}}
            {{--                            </a></li>--}}
            {{--                        <li><a href="#">--}}
            {{--                                <div class="language_flag"><img src="{{asset('aStar/images/flag_4.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
            {{--                                <div class="dropdown_text">russian</div>--}}
            {{--                            </a></li>--}}
            {{--                        <li><a href="#">--}}
            {{--                                <div class="language_flag"><img src="{{asset('aStar/images/flag_5.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
            {{--                                <div class="dropdown_text">spanish</div>--}}
            {{--                            </a></li>--}}
            {{--                    </ul>--}}

            {{--                </div>--}}

            <!-- Currency -->
                <div class="info_currencies has_children">
                    <div class="dropdown_text">usd</div>
                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                    <!-- Currencies Dropdown Menu -->
                    <ul>
                        <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
                        <li><a href="#"><div class="dropdown_text">YEN</div></a></li>
                        <li><a href="#"><div class="dropdown_text">GBP</div></a></li>
                        <li><a href="#"><div class="dropdown_text">CAD</div></a></li>
                    </ul>

                </div>

                <!-- Cart -->
                <div class="cart d-flex flex-row align-items-center justify-content-start">
                    <div class="cart_icon"><a href="cart.html">
                            <img src="{{asset('aStar/images/bag.png')}}" alt="">
                            <div class="cart_num">2</div>
                        </a></div>
                </div>

            </div>

        </div>
    </header>

    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="menu_top d-flex flex-row align-items-center justify-content-start">

            <!-- Language -->
        {{--            <div class="info_languages has_children">--}}
        {{--                <div class="language_flag"><img src="{{asset('aStar/images/flag_1.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
        {{--                <div class="dropdown_text">english</div>--}}
        {{--                <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>--}}

        {{--                <!-- Language Dropdown Menu -->--}}
        {{--                <ul>--}}
        {{--                    <li><a href="#">--}}
        {{--                            <div class="language_flag"><img src="{{asset('aStar/images/flag_2.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
        {{--                            <div class="dropdown_text">french</div>--}}
        {{--                        </a></li>--}}
        {{--                    <li><a href="#">--}}
        {{--                            <div class="language_flag"><img src="{{asset('aStar/images/flag_3.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
        {{--                            <div class="dropdown_text">japanese</div>--}}
        {{--                        </a></li>--}}
        {{--                    <li><a href="#">--}}
        {{--                            <div class="language_flag"><img src="{{asset('aStar/images/flag_4.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
        {{--                            <div class="dropdown_text">russian</div>--}}
        {{--                        </a></li>--}}
        {{--                    <li><a href="#">--}}
        {{--                            <div class="language_flag"><img src="{{asset('aStar/images/flag_5.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
        {{--                            <div class="dropdown_text">spanish</div>--}}
        {{--                        </a></li>--}}
        {{--                </ul>--}}

        {{--            </div>--}}

        <!-- Currency -->
            {{--            <div class="info_currencies has_children">--}}
            {{--                <div class="dropdown_text">usd</div>--}}
            {{--                <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>--}}

            {{--                <!-- Currencies Dropdown Menu -->--}}
            {{--                <ul>--}}
            {{--                    <li><a href="#"><div class="dropdown_text">EUR</div></a></li>--}}
            {{--                    <li><a href="#"><div class="dropdown_text">YEN</div></a></li>--}}
            {{--                    <li><a href="#"><div class="dropdown_text">GBP</div></a></li>--}}
            {{--                    <li><a href="#"><div class="dropdown_text">CAD</div></a></li>--}}
            {{--                </ul>--}}

            {{--            </div>--}}

        </div>
        <div class="menu_search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="index.html">home</a></li>
                <li class="menu_mm"><a href="#">woman</a></li>
                <li class="menu_mm"><a href="#">man</a></li>
                <li class="menu_mm"><a href="#">lookbook</a></li>
                <li class="menu_mm"><a href="blog.html">blog</a></li>
                <li class="menu_mm"><a href="contact.html">contact</a></li>
            </ul>
        </nav>
        <div class="menu_extra">
            <div class="menu_social">
                <ul>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Sidebar -->

    <div class="sidebar">

        <!-- Info -->
    {{--        <div class="info">--}}
    {{--            <div class="info_content d-flex flex-row align-items-center justify-content-start">--}}

    {{--                <!-- Language -->--}}
    {{--                <div class="info_languages has_children">--}}
    {{--                    <div class="language_flag"><img src="{{asset('aStar/images/flag_1.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
    {{--                    <div class="dropdown_text">english</div>--}}
    {{--                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>--}}

    {{--                    <!-- Language Dropdown Menu -->--}}
    {{--                    <ul>--}}
    {{--                        <li><a href="#">--}}
    {{--                                <div class="language_flag"><img src="{{asset('aStar/images/flag_2.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
    {{--                                <div class="dropdown_text">french</div>--}}
    {{--                            </a></li>--}}
    {{--                        <li><a href="#">--}}
    {{--                                <div class="language_flag"><img src="{{asset('aStar/images/flag_3.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
    {{--                                <div class="dropdown_text">japanese</div>--}}
    {{--                            </a></li>--}}
    {{--                        <li><a href="#">--}}
    {{--                                <div class="language_flag"><img src="{{asset('aStar/images/flag_4.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
    {{--                                <div class="dropdown_text">russian</div>--}}
    {{--                            </a></li>--}}
    {{--                        <li><a href="#">--}}
    {{--                                <div class="language_flag"><img src="{{asset('aStar/images/flag_5.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>--}}
    {{--                                <div class="dropdown_text">spanish</div>--}}
    {{--                            </a></li>--}}
    {{--                    </ul>--}}

    {{--                </div>--}}

    {{--                <!-- Currency -->--}}
    {{--                <div class="info_currencies has_children">--}}
    {{--                    <div class="dropdown_text">usd</div>--}}
    {{--                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>--}}

    {{--                    <!-- Currencies Dropdown Menu -->--}}
    {{--                    <ul>--}}
    {{--                        <li><a href="#"><div class="dropdown_text">EUR</div></a></li>--}}
    {{--                        <li><a href="#"><div class="dropdown_text">YEN</div></a></li>--}}
    {{--                        <li><a href="#"><div class="dropdown_text">GBP</div></a></li>--}}
    {{--                        <li><a href="#"><div class="dropdown_text">CAD</div></a></li>--}}
    {{--                    </ul>--}}

    {{--                </div>--}}

    {{--            </div>--}}
    {{--        </div>--}}

    <!-- Logo -->
        <div class="sidebar_logo">
            <a href="#"><div>C<span>ary</span></div></a>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="sidebar_nav">
            <ul>
                <li><a href="/profile">home</a></li>
                {{--                <li><a href="/store">stores<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>--}}
                {{--                <li><a href="/brand">bands<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>--}}
                {{--                <li><a href="/model">models<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>--}}
                {{--                <li><a href="/car">cars<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>--}}

                <li><a href="/register">Register<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="/login">Login<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="/about">about<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="/contact">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        <!-- Search -->
    {{--        <div class="search">--}}
    {{--            <form action="#" class="search_form" id="sidebar_search_form">--}}
    {{--                <input type="text" class="search_input" placeholder="Search" required="required">--}}
    {{--                <button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>--}}
    {{--            </form>--}}
    {{--        </div>--}}

    <!-- Cart -->
        {{--        <div class="cart d-flex flex-row align-items-center justify-content-start">--}}
        {{--            <div class="cart_icon"><a href="cart.html">--}}
        {{--                    <img src="{{asset('aStar/images/bag.png')}}" alt="">--}}
        {{--                    <div class="cart_num">2</div>--}}
        {{--                </a></div>--}}
        {{--            <div class="cart_text">bag</div>--}}
        {{--            <div class="cart_price">$39.99 (1)</div>--}}
        {{--        </div>--}}
    </div>

    <!-- Home -->
<div >
    <div class="container" style="color: #59a869 ; margin-left: 200px ">
        <BR>
        <br>
        <h1> <em>Who are we ?!</em></h1>


        <div  class="home_title" >

       <p style="color: #000000">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
           <br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
           <br>when an unknown printer took a galley of type and scrambled it to make a type specimen book .
           <br>
       It has survived not only five centuries, but also the leap into electronic typesetting,
           <br>remaining essentially unchanged.
           <br>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
           <br>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
                    <!-- Home Slider -->
                </div>
<!-- Newsletter -->
    <div class="newsletter">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('aStar/images/cover.jpg')}}" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_title">Wellcom To Cary Website ...</div>
                            {{--                            <div class="newsletter_subtitle">we won't spam, we promise!</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer_content">
            <div class="section_container" id="aboutUs">
                <div class="container">
                    <div class="row">

                        <!-- About -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_about">
                                <!-- Logo -->
                                <div class="footer_logo">
                                    <a href="#"><div>C<span>ary</span></div></a>
                                </div>
                                <div class="footer_about_text">
                                    <p>
                                        Welcome to our website, here you find the best types of good cars, here is the company's website, and if you encounter any problem or any queries you can contact us through our page through the site .</p>
                                </div>
                                {{--                                <div class="cards">--}}
                                {{--                                    <ul class="d-flex flex-row align-items-center justify-content-start">--}}
                                {{--                                        <li><a href="#"><img src="{{asset('aStar/images/card_1.jpg')}}" alt=""></a></li>--}}
                                {{--                                        <li><a href="#"><img src="{{asset('aStar/images/card_2.jpg')}}" alt=""></a></li>--}}
                                {{--                                        <li><a href="#"><img src="{{asset('aStar/images/card_3.jpg')}}" alt=""></a></li>--}}
                                {{--                                        <li><a href="#"><img src="{{asset('aStar/images/card_4.jpg')}}" alt=""></a></li>--}}
                                {{--                                        <li><a href="#"><img src="{{asset('aStar/images/card_5.jpg')}}" alt=""></a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>

                        <!-- Questions -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_questions">
                                <div class="footer_title">questions</div>
                                <div class="footer_list">
                                    <ul>
                                        <li><a href="/login">Login</a></li>

                                        <li><a href="/register">Register</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Blog -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_blog">
                                <div class="footer_title">blog</div>
                                <div class="footer_blog_container">

                                    <!-- Blog Item -->
                                    <div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
                                        <div class="footer_blog_image"><a href="blog.html"><img src="{{asset('aStar/images/sport.jpg')}}" alt=""></a></div>
                                        <div class="footer_blog_content">
                                            <div class="footer_blog_title"><a href="{{route('whatCar')}}">what cars to use</a></div>
                                        </div>
                                    </div>

                                    <!-- Blog Item -->
                                    <div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
                                        <div class="footer_blog_image"><a href="blog.html"><img src="{{asset('aStar/images/trend.jpg')}}" alt=""></a></div>
                                        <div class="footer_blog_content">
                                            <div class="footer_blog_title"><a href="/about">Who are we </a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Contact -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_contact">
                                <div class="footer_title">contact</div>
                                <div class="footer_contact_list">
                                    <ul>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>C.</span><div>Gaza Sky Geeks Co.</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>A.</span><div>Gaza Srtipe - Palestian</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>T.</span><div>00972 5951 90381</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>E.</span><div>caryLara2019@gmail.com</div></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social -->
    {{--        <div class="footer_social">--}}
    {{--            <div class="section_container">--}}
    {{--                <div class="container">--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col">--}}
    {{--                            <div class="footer_social_container d-flex flex-row align-items-center justify-content-between">--}}
    {{--                                <!-- Instagram -->--}}
    {{--                                <a href="#">--}}
    {{--                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">--}}
    {{--                                        <div class="footer_social_icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>--}}
    {{--                                        <div class="footer_social_title">instagram</div>--}}
    {{--                                    </div>--}}
    {{--                                </a>--}}
    {{--                                <!-- Google + -->--}}
    {{--                                <a href="#">--}}
    {{--                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">--}}
    {{--                                        <div class="footer_social_icon"><i class="fa fa-google-plus" aria-hidden="true"></i></div>--}}
    {{--                                        <div class="footer_social_title">google +</div>--}}
    {{--                                    </div>--}}
    {{--                                </a>--}}
    {{--                                <!-- Pinterest -->--}}
    {{--                                <a href="#">--}}
    {{--                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">--}}
    {{--                                        <div class="footer_social_icon"><i class="fa fa-pinterest" aria-hidden="true"></i></div>--}}
    {{--                                        <div class="footer_social_title">pinterest</div>--}}
    {{--                                    </div>--}}
    {{--                                </a>--}}
    {{--                                <!-- Facebook -->--}}
    {{--                                <a href="#">--}}
    {{--                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">--}}
    {{--                                        <div class="footer_social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>--}}
    {{--                                        <div class="footer_social_title">facebook</div>--}}
    {{--                                    </div>--}}
    {{--                                </a>--}}
    {{--                                <!-- Twitter -->--}}
    {{--                                <a href="#">--}}
    {{--                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">--}}
    {{--                                        <div class="footer_social_icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>--}}
    {{--                                        <div class="footer_social_title">twitter</div>--}}
    {{--                                    </div>--}}
    {{--                                </a>--}}
    {{--                                <!-- YouTube -->--}}
    {{--                                <a href="#">--}}
    {{--                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">--}}
    {{--                                        <div class="footer_social_icon"><i class="fa fa-youtube" aria-hidden="true"></i></div>--}}
    {{--                                        <div class="footer_social_title">youtube</div>--}}
    {{--                                    </div>--}}
    {{--                                </a>--}}
    {{--                                <!-- Tumblr -->--}}
    {{--                                <a href="#">--}}
    {{--                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">--}}
    {{--                                        <div class="footer_social_icon"><i class="fa fa-tumblr-square" aria-hidden="true"></i></div>--}}
    {{--                                        <div class="footer_social_title">tumblr</div>--}}
    {{--                                    </div>--}}
    {{--                                </a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    <!-- Credits -->
        <div class="credits">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="credits_content d-flex flex-row align-items-center justify-content-end">
                                <div class="credits_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Manar & Esraa</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</div>

<script src="{{asset('aStar/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('aStar/styles/bootstrap-4.1.3/popper.js')}}"></script>
<script src="{{asset('aStar/styles/bootstrap-4.1.3/bootstrap.min.js')}}"></script>
<script src="{{asset('aStar/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('aStar/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('aStar/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('aStar/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('aStar/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('aStar/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('aStar/plugins/easing/easing.js')}}"></script>
<script src="{{asset('aStar/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('aStar/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('aStar/plugins/Isotope/fitcolumns.js')}}"></script>
<script src="{{asset('aStar/js/custom.js')}}"></script>
</body>
</html>

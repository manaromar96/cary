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
                <li><a href="index.html">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="#">stores<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="#">bands<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="#">models<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="#">cars<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="#">about<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="#">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        <!-- Search -->
        <div class="search">
            <form action="#" class="search_form" id="sidebar_search_form">
                <input type="text" class="search_input" placeholder="Search" required="required">
                <button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        <!-- Cart -->
        <div class="cart d-flex flex-row align-items-center justify-content-start">
            <div class="cart_icon"><a href="cart.html">
                    <img src="{{asset('aStar/images/bag.png')}}" alt="">
                    <div class="cart_num">2</div>
                </a></div>
            <div class="cart_text">bag</div>
            <div class="cart_price">$39.99 (1)</div>
        </div>
    </div>

    <!-- Home -->

    <div class="home">

        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url({{asset('aStar/images/123.jpg')}})"></div>
                    <div class="home_content_container">
                        <div class="home_content">
{{--                            <div class="home_discount d-flex flex-row align-items-end justify-content-start">--}}
{{--                                <div class="home_discount_num">20</div>--}}
{{--                                <div class="home_discount_text">Discount on the</div>--}}
{{--                            </div>--}}
                            <div class="home_title">The Fast and the Furious</div>
                            <div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url({{asset('aStar/images/maincar.jpg')}})"></div>
                    <div class="home_content_container">
                        <div class="home_content">
{{--                            <div class="home_discount d-flex flex-row align-items-end justify-content-start">--}}
{{--                                <div class="home_discount_num">20</div>--}}
{{--                                <div class="home_discount_text">Discount on the</div>--}}
{{--                            </div>--}}
                            <div class="home_title">The Fast and the Furious</div>
                            <div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url({{asset('aStar/images/1234.jpg')}})"></div>
                    <div class="home_content_container">
                        <div class="home_content">
{{--                            <div class="home_discount d-flex flex-row align-items-end justify-content-start">--}}
{{--                                <div class="home_discount_num">20</div>--}}
{{--                                <div class="home_discount_text">Discount on the</div>--}}
{{--                            </div>--}}
                            <div class="home_title">The Fast and the Furious</div>
                            <div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Home Slider Navigation -->
            <div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="{{asset('aStar/images/prev.png')}}" alt=""></div></div>
            <div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="{{asset('aStar/images/next.png')}}" alt=""></div></div>

        </div>
    </div>

    <!-- Boxes -->

    <div class="boxes">
        <div class="section_container">
            <div class="container">
                <div class="row">

                    <!-- Box -->
                    <div class="col-lg-4 box_col">
                        <div class="box">
                            <div class="box_image"><img src="{{asset('aStar/images/hyundai.jpg')}}" alt=""></div>
                            <div class="box_title trans_200"><a href="categories.html">Hyundia cars</a></div>
                        </div>
                    </div>

                    <!-- Box -->
                    <div class="col-lg-4 box_col">
                        <div class="box">
                            <div class="box_image"><img src="{{asset('aStar/images/kia1.jpg')}}" alt=""></div>
                            <div class="box_title trans_200"><a href="categories.html">Kia Cars</a></div>
                        </div>
                    </div>

                    <!-- Box -->
                    <div class="col-lg-4 box_col">
                        <div class="box">
                            <div class="box_image"><img src="{{asset('aStar/images/ferrari.jpg')}}" alt=""></div>
                            <div class="box_title trans_200"><a href="categories.html">Ferrari Cars</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Categories -->

    <div class="categories">
        <div class="section_container">
            <div class="container ">
                <div class="row options">
                    <div class="col text-center">
                        <div class="categories_list_container">
                            <ul class="categories_list d-flex flex-row align-items-center justify-content-start">
                                <li><a href="categories.html">new stores</a></li>
                                <li><a href="categories.html">recommended brands</a></li>
                                <li><a href="categories.html">Last Offers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->

{{--    <div class="products">--}}
{{--        <div class="section_container">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col">--}}
{{--                        <div class="products_container grid">--}}

{{--                            <!-- Product -->--}}
{{--                            <div class="product grid-item hot">--}}
{{--                                <div class="product_inner">--}}
{{--                                    <div class="product_image">--}}
{{--                                        <img src="{{asset('aStar/images/product_1.jpg')}}" alt="">--}}
{{--                                        <div class="product_tag">hot</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product_content text-center">--}}
{{--                                        <div class="product_title"><a href="product.html">long red shirt</a></div>--}}
{{--                                        <div class="product_price">$39.90</div>--}}
{{--                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Product -->--}}
{{--                            <div class="product grid-item">--}}
{{--                                <div class="product_inner">--}}
{{--                                    <div class="product_image"><img src="{{asset('aStar/images/product_2.jpg')}}" alt=""></div>--}}
{{--                                    <div class="product_content text-center">--}}
{{--                                        <div class="product_title"><a href="product.html">hype grey shirt</a></div>--}}
{{--                                        <div class="product_price">$19.50</div>--}}
{{--                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Product -->--}}
{{--                            <div class="product grid-item sale">--}}
{{--                                <div class="product_inner">--}}
{{--                                    <div class="product_image">--}}
{{--                                        <img src="{{asset('aStar/images/product_3.jpg')}}" alt="">--}}
{{--                                        <div class="product_tag">sale</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product_content text-center">--}}
{{--                                        <div class="product_title"><a href="product.html">long sleeve jacket</a></div>--}}
{{--                                        <div class="product_price">$32.20<span>RRP 64.40</span></div>--}}
{{--                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Product -->--}}
{{--                            <div class="product grid-item">--}}
{{--                                <div class="product_inner">--}}
{{--                                    <div class="product_image">--}}
{{--                                        <img src="{{asset('aStar/images/product_4.jpg')}}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="product_content text-center">--}}
{{--                                        <div class="product_title"><a href="product.html">denim men shirt</a></div>--}}
{{--                                        <div class="product_price">$59.90</div>--}}
{{--                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Product -->--}}
{{--                            <div class="product grid-item">--}}
{{--                                <div class="product_inner">--}}
{{--                                    <div class="product_image">--}}
{{--                                        <img src="{{asset('aStar/images/product_5.jpg')}}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="product_content text-center">--}}
{{--                                        <div class="product_title"><a href="product.html">long red shirt</a></div>--}}
{{--                                        <div class="product_price">$79.90</div>--}}
{{--                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Product -->--}}
{{--                            <div class="product grid-item new">--}}
{{--                                <div class="product_inner">--}}
{{--                                    <div class="product_image">--}}
{{--                                        <img src="{{asset('aStar/images/product_6.jpg')}}" alt="">--}}
{{--                                        <div class="product_tag">new</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product_content text-center">--}}
{{--                                        <div class="product_title"><a href="product.html">hype grey shirt</a></div>--}}
{{--                                        <div class="product_price">$59.90</div>--}}
{{--                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Product -->--}}
{{--                            <div class="product grid-item">--}}
{{--                                <div class="product_inner">--}}
{{--                                    <div class="product_image">--}}
{{--                                        <img src="{{asset('aStar/images/product_7.jpg')}}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="product_content text-center">--}}
{{--                                        <div class="product_title"><a href="product.html">long sleeve jacket</a></div>--}}
{{--                                        <div class="product_price">$15.90</div>--}}
{{--                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Product -->--}}
{{--                            <div class="product grid-item sale">--}}
{{--                                <div class="product_inner">--}}
{{--                                    <div class="product_image">--}}
{{--                                        <img src="{{asset('aStar/images/product_8.jpg')}}" alt="">--}}
{{--                                        <div class="product_tag">sale</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product_content text-center">--}}
{{--                                        <div class="product_title"><a href="product.html">denim men shirt</a></div>--}}
{{--                                        <div class="product_price">$43.99<span>RRP 64.40</span></div>--}}
{{--                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('aStar/images/cover.jpg')}}" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_title">subscribe to our site</div>
                            <div class="newsletter_subtitle">we won't spam, we promise!</div>
                        </div>
                        <div class="newsletter_form_container">
                            <form action="#" id="newsletter_form" class="newsletter_form">
                                <input type="email" class="newsletter_input" placeholder="your e-mail here" required="required">
                                <button class="newsletter_button">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="footer_content">
            <div class="section_container">
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
                                    <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
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
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Stores</a></li>
                                        <li><a href="#">Owner</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Terms of Use</a></li>
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
                                            <div class="footer_blog_title"><a href="blog.html">what cars to use</a></div>
                                            <div class="footer_blog_date">sep 15, 2019</div>
                                            <div class="footer_blog_link"><a href="blog.html">Read More</a></div>
                                        </div>
                                    </div>

                                    <!-- Blog Item -->
                                    <div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
                                        <div class="footer_blog_image"><a href="blog.html"><img src="{{asset('aStar/images/trend.jpg')}}" alt=""></a></div>
                                        <div class="footer_blog_content">
                                            <div class="footer_blog_title"><a href="blog.html">trends this year</a></div>
                                            <div class="footer_blog_date">sep 15, 2019</div>
                                            <div class="footer_blog_link"><a href="blog.html">Read More</a></div>
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
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>C.</span><div>Your Company Ltd</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>A.</span><div>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>T.</span><div>+53 345 7953 32453</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>E.</span><div>office@youremail.com</div></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social -->
        <div class="footer_social">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_social_container d-flex flex-row align-items-center justify-content-between">
                                <!-- Instagram -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">instagram</div>
                                    </div>
                                </a>
                                <!-- Google + -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">google +</div>
                                    </div>
                                </a>
                                <!-- Pinterest -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-pinterest" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">pinterest</div>
                                    </div>
                                </a>
                                <!-- Facebook -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">facebook</div>
                                    </div>
                                </a>
                                <!-- Twitter -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">twitter</div>
                                    </div>
                                </a>
                                <!-- YouTube -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">youtube</div>
                                    </div>
                                </a>
                                <!-- Tumblr -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-tumblr-square" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">tumblr</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Credits -->
        <div class="credits">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="credits_content d-flex flex-row align-items-center justify-content-end">
                                <div class="credits_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
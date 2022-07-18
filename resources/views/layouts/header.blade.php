<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Floda - Flower eCommerce Bootstrap 5 Template</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!-- Google fonts include -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,900%7CYesteryear" rel="stylesheet">

    <!-- All Vendor & plugins CSS include -->
    <link href="{{asset('css/vendor.css')}}" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

 

</head>

<body>

    <!-- Start Header Area -->
    <header class="header-area">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header top start -->
            <div class="header-top bdr-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="welcome-message">
                                <p>Welcome to Floda online store</p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="header-top-settings">
                                <ul class="nav align-items-center justify-content-end">
                                    <li class="language">
                                        <span>Language:</span>
                                        <img src="{{asset('img/icon/en.png')}}" alt="flag"> English
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list">
                                            <li><a href="#"><img src="{{asset('img/icon/en.png')}}" alt="flag"> english</a></li>
                                            <li><a href="#"><img src="{{asset('img/icon/fr.png')}}" alt="flag"> french</a></li>
                                        </ul>
                                    </li>
                                    <li class="curreny-wrap">
                                        <span>Currency:</span>
                                        $ USD
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list curreny-list">
                                            <li><a href="#">$ usd</a></li>
                                            <li><a href="#"> € EURO</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->
             <!-- header middle area start -->
             <div class="header-main-area sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">

                        <!-- start logo area -->
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="{{url('/')}}">
                                    <img src="{{asset('img/logo/logo.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->

                        <!-- main menu area start -->
                        <div class="col-lg-6 position-static">
                            <div class="main-menu-area">
                                <div class="main-menu">
                                    <!-- main menu navbar start -->
                                    <nav class="desktop-menu">
                                        <ul>
                                            <li class="active"><a href="{{url('/')}}">Home <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="{{url('/')}}">Home version 01</a></li>
                                                    <li><a href="{{url('home_2')}}">Home version 02</a></li>
                                                    <li><a href="{{url('home_3')}}">Home version 03</a></li>
                                                    <li><a href="{{url('home_4')}}">Home version 04</a></li>
                                                </ul>
                                            </li>
                                            <li class="static"><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu dropdown">
                                                    <li class="mega-title"><a href="#">column 01</a>
                                                        <ul>
                                                            <li><a href="{{url('shop')}}">shop grid left
                                                                    sidebar</a></li>
                                                            <li><a href="{{url('shop_grid_right_sidebar')}}">shop grid right
                                                                    sidebar</a></li>
                                                            <li><a href="{{url('shop_list_left_sidebar')}}">shop list left sidebar</a></li>
                                                            <li><a href="{{url('shop_list_right_sidebar')}}">shop list right sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 02</a>
                                                        <ul>
                                                            <li><a href="{{url('product_details')}}">product details</a></li>
                                                            <li><a href="{{url('product_details_affiliate')}}">product
                                                                    details
                                                                    affiliate</a></li>
                                                            <li><a href="{{url('product_details_variable')}}">product details
                                                                    variable</a></li>
                                                            <li><a href="{{url('product_details_group')}}">product details
                                                                    group</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 03</a>
                                                        <ul>
                                                            <li><a href="{{url('cart')}}">cart</a></li>
                                                            <li><a href="{{url('checkout')}}">checkout</a></li>
                                                            <li><a href="{{url('compare')}}">compare</a></li>
                                                            <li><a href="{{url('wishlist')}}">wishlist</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 04</a>
                                                        <ul>
                                                            <li><a href="{{url('my_account')}}">my-account</a></li>
                                                            <li><a href="{{url('register')}}">login-register</a></li>
                                                            <li><a href="{{url('contact_us')}}">contact us</a></li>
                                                            <li><a href="{{url('faq')}}">faq's</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-banners d-none d-lg-block">
                                                        <a href="{{url('product_details')}}">
                                                            <img src="{{asset('img/banner/img-bottom-menu.jpg')}}" alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('shop')}}">shop <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="#">shop grid layout <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="{{url('shop')}}">shop grid left sidebar</a></li>
                                                            <li><a href="{{url('shop_grid_right_sidebar')}}">shop grid right sidebar</a></li>
                                                            <li><a href="{{url('shop_grid_full_3_col')}}">shop grid full 3 col</a></li>
                                                            <li><a href="{{url('shop_grid_full_4_col')}}">shop grid full 4 col</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">shop list layout <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="{{url('shop_list_left_sidebar')}}">shop list left sidebar</a></li>
                                                            <li><a href="{{url('shop_list_right_sidebar')}}">shop list right sidebar</a></li>
                                                            <li><a href="{{url('shop_list_full_width')}}">shop list full width</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">products details <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="{{url('product_details')}}">product details</a></li>
                                                            <li><a href="{{url('product_details_affiliate')}}">product details affiliate</a></li>
                                                            <li><a href="{{url('product_details_variable')}}">product details variable</a></li>
                                                            <li><a href="{{url('product_details_group')}}">product details group</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('blog_left_sidebar')}}">Blog <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="{{url('blog_left_sidebar')}}">blog left sidebar</a></li>
                                                    <li><a href="{{url('blog_right_sidebar')}} ">blog right sidebar</a></li>
                                                    <li><a href="{{url('blog_grid_full_width')}} ">blog grid no sidebar</a></li>
                                                    <li><a href="{{url('blog_details')}}">blog details</a></li>
                                                    <li><a href="{{url('blog_details_left_sidebar')}}">blog details left sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('contact_us')}}">Contact us</a></li>
                                        </ul>
                                    </nav>
                                    <!-- main menu navbar end -->
                                </div>
                            </div>
                        </div>
                        <!-- main menu area end -->

                        <!-- mini cart area start -->
                        <div class="col-lg-3">
                            <div class="header-configure-wrapper">
                                <div class="header-configure-area">
                                    <ul class="nav justify-content-end">
                                        <li>
                                            <a href="#" class="offcanvas-btn">
                                                <i class="lnr lnr-magnifier"></i>
                                            </a>
                                        </li>
                                        <li class="user-hover">
                                            <a href="#">
                                                <i class="lnr lnr-user"></i>
                                            </a>
                                            <ul class="dropdown-list">
                                                @if(Session::has('name'))
                                                <li><a href="{{url('my_account')}}">my account</a></li>
                                                <li><a href="{{url('logout')}}">Logout</a></li>
                                                @else
                                                <li><a href="{{url('login')}}">login</a></li>
                                                <li><a href="{{url('register')}}">register</a></li>
                                                @endif
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{url('wishlist')}}">
                                                <i class="lnr lnr-heart"></i>
                                                <div class="notification">0</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="minicart-btn">
                                                <i class="lnr lnr-cart"></i>
                                                <div class="notification">2</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart area end -->

                    </div>
                </div>
            </div>
            <!-- header middle area end -->
        </div>
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="{{url('/')}}">
                                    <img src="{{asset('img/logo/logo.png')}}" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="{{url('cart')}}">
                                        <i class="lnr lnr-cart"></i>
                                    </a>
                                </div>
                                <div class="mobile-menu-btn">
                                    <div class="off-canvas-btn">
                                        <i class="lnr lnr-menu"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
    </header>
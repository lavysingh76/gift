@extends('layouts.index')

@section('content')

    <!-- main wrapper start -->
    <main>
        <!-- slider area start -->
        <section class="slider-area">
            <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
                <!-- single slider item start -->
                <div class="hero-single-slide ">
                    <div class="hero-slider-item bg-img" data-bg="{{asset('img/slider/home1-slide1.jpg')}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hero-slider-content slide-1">
                                        <span>valentine gift</span>
                                        <h1>Fresh Your Mind</h1>
                                        <h2>& Feeling love</h2>
                                        <a href="shop.html" class="btn-hero">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item end -->

                <!-- single slider item start -->
                <div class="hero-single-slide">
                    <div class="hero-slider-item bg-img" data-bg="{{asset('img/slider/home1-slide2.jpg')}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hero-slider-content slide-2">
                                        <span>valentine gift</span>
                                        <h1>Fresh Your Mind</h1>
                                        <h2>& Feeling love</h2>
                                        <a href="shop.html" class="btn-hero">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item start -->
            </div>
        </section>
        <!-- slider area end -->

        <!-- banner statistics start -->
        <section class="banner-statistics section-space">
            <div class="container">
                <div class="row mbn-30">
                    <!-- start store item -->
                    <div class="col-md-4">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="{{asset('img/banner/img1-top-floda1.jpg')}}" alt="">
                                </a>
                                <figcaption class="banner-content">
                                    <h2 class="text1">Top friday</h2>
                                    <h2 class="text2">Yellow Gold</h2>
                                    <a class="store-link" href="#">buy it now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->

                    <!-- start store item -->
                    <div class="col-md-4">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="{{asset('img/banner/img1-top-floda2.jpg')}}" alt="">
                                </a>
                                <figcaption class="banner-content text-center">
                                    <h2 class="text1">Black friday</h2>
                                    <h2 class="text2">Orchid stick</h2>
                                    <a class="store-link" href="#">buy it now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->

                    <!-- start store item -->
                    <div class="col-md-4">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="{{asset('img/banner/img1-top-floda3.jpg')}}" alt="">
                                </a>
                                <figcaption class="banner-content">
                                    <h2 class="text1">10% off</h2>
                                    <h2 class="text2">tulip flower</h2>
                                    <a class="store-link" href="#">buy it now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->
                </div>
            </div>
        </section>
        <!-- banner statistics end -->

        <!-- service policy start -->
        <section class="service-policy-area section-space p-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!-- start policy single item -->
                        <div class="service-policy-item">
                            <div class="icons">
                                <img src="{{asset('img/icon/free_shipping.png')}}" alt="">
                            </div>
                            <div class="policy-terms">
                                <h5>free shipping</h5>
                                <p>Free shipping all order</p>
                            </div>
                        </div>
                        <!-- end policy single item -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!-- start policy single item -->
                        <div class="service-policy-item">
                            <div class="icons">
                                <img src="{{asset('img/icon/support247.png')}}" alt="">
                            </div>
                            <div class="policy-terms">
                                <h5>SUPPORT 24/7</h5>
                                <p>Support 24 hours a day</p>
                            </div>
                        </div>
                        <!-- end policy single item -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!-- start policy single item -->
                        <div class="service-policy-item">
                            <div class="icons">
                                <img src="{{asset('img/icon/money_back.png')}}" alt="">
                            </div>
                            <div class="policy-terms">
                                <h5>Money Return</h5>
                                <p>30 days for free return</p>
                            </div>
                        </div>
                        <!-- end policy single item -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!-- start policy single item -->
                        <div class="service-policy-item">
                            <div class="icons">
                                <img src="{{asset('img/icon/promotions.png')}}" alt="">
                            </div>
                            <div class="policy-terms">
                                <h5>ORDER DISCOUNT</h5>
                                <p>On every order over $15</p>
                            </div>
                        </div>
                        <!-- end policy single item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- service policy end -->

        <!-- our product area start -->
        <section class="our-product section-space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>New Products</h2>
                            <p>Accumsan vitae pede lacus ut ullamcorper sollicitudin quisque libero</p>
                        </div>
                    </div>
                </div>
                <div class="row mtn-40">
                    <!-- product single item start -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item mt-40">
                            <figure class="product-thumb">
                                <a href="{{url('product_details')}}">
                                    <img class="pri-img" src="{{asset('img/product/product-1.jpg')}}" alt="product">
                                    <img class="sec-img" src="{{asset('img/product/product-2.jpg')}}" alt="product">
                                </a>
                                <div class="product-badge">
                                    <div class="product-label new">
                                        <span>new</span>
                                    </div>
                                    <div class="product-label discount">
                                        <span>10%</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                </div>
                            </figure>
                            <div class="product-caption">
                                <p class="product-name">
                                    <a href="{{url('product_details')}}">Flowers bouquet pink</a>
                                </p>
                                <div class="price-box">
                                    <span class="price-regular">$60.00</span>
                                    <span class="price-old"><del>$70.00</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product single item end -->

                    <!-- product single item start -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item mt-40">
                            <figure class="product-thumb">
                                <a href="{{url('product_details')}}">
                                    <img class="pri-img" src="{{asset('img/product/product-3.jpg')}}" alt="product">
                                    <img class="sec-img" src="{{asset('img/product/product-4.jpg')}}" alt="product">
                                </a>
                                <div class="product-badge">
                                    <div class="product-label new">
                                        <span>new</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                </div>
                            </figure>
                            <div class="product-caption">
                                <p class="product-name">
                                    <a href="{{url('product_details')}}">Jasmine flowers white</a>
                                </p>
                                <div class="price-box">
                                    <span class="price-regular">$60.00</span>
                                    <span class="price-old"><del>$70.00</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product single item end -->

                    <!-- product single item start -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item mt-40">
                            <figure class="product-thumb">
                                <a href="{{url('product_details')}}">
                                    <img class="pri-img" src="{{asset('img/product/product-5.jpg')}}" alt="product">
                                    <img class="sec-img" src="{{asset('img/product/product-6.jpg')}}" alt="product">
                                </a>
                                <div class="product-badge">
                                    <div class="product-label new">
                                        <span>new</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                </div>
                            </figure>
                            <div class="product-caption">
                                <p class="product-name">
                                    <a href="{{url('product_details')}}">Blossom bouquet flower</a>
                                </p>
                                <div class="price-box">
                                    <span class="price-regular">$50.00</span>
                                    <span class="price-old"><del>$80.00</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product single item end -->

                    <!-- product single item start -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item mt-40">
                            <figure class="product-thumb">
                                <a href="{{url('product_details')}}">
                                    <img class="pri-img" src="{{asset('img/product/product-7.jpg')}}" alt="product">
                                    <img class="sec-img" src="{{asset('img/product/product-8.jpg')}}" alt="product">
                                </a>
                                <div class="product-badge">
                                    <div class="product-label new">
                                        <span>new</span>
                                    </div>
                                    <div class="product-label discount">
                                        <span>15%</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                </div>
                            </figure>
                            <div class="product-caption">
                                <p class="product-name">
                                    <a href="{{url('product_details')}}">Hyacinth white stick</a>
                                </p>
                                <div class="price-box">
                                    <span class="price-regular">$30.00</span>
                                    <span class="price-old"><del>$55.00</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product single item end -->

                    <!-- product single item start -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item mt-40">
                            <figure class="product-thumb">
                                <a href="{{url('product_details')}}">
                                    <img class="pri-img" src="{{asset('img/product/product-9.jpg')}}" alt="product">
                                    <img class="sec-img" src="{{asset('img/product/product-10.jpg')}}" alt="product">
                                </a>
                                <div class="product-badge">
                                    <div class="product-label new">
                                        <span>new</span>
                                    </div>
                                    <div class="product-label discount">
                                        <span>30%</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                </div>
                            </figure>
                            <div class="product-caption">
                                <p class="product-name">
                                    <a href="{{url('product_details')}}">Orchid flower red stick</a>
                                </p>
                                <div class="price-box">
                                    <span class="price-regular">$80.00</span>
                                    <span class="price-old"><del>$90.00</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product single item end -->

                    <!-- product single item start -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item mt-40">
                            <figure class="product-thumb">
                                <a href="{{url('product_details')}}">
                                    <img class="pri-img" src="{{asset('img/product/product-11.jpg')}}" alt="product">
                                    <img class="sec-img" src="{{asset('img/product/product-12.jpg')}}" alt="product">
                                </a>
                                <div class="product-badge">
                                    <div class="product-label new">
                                        <span>new</span>
                                    </div>
                                    <div class="product-label discount">
                                        <span>12%</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                </div>
                            </figure>
                            <div class="product-caption">
                                <p class="product-name">
                                    <a href="{{url('product_details')}}">Flowers daisy pink stick</a>
                                </p>
                                <div class="price-box">
                                    <span class="price-regular">$40.00</span>
                                    <span class="price-old"><del>$50.00</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product single item end -->

                    <!-- product single item start -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item mt-40">
                            <figure class="product-thumb">
                                <a href="{{url('product_details')}}">
                                    <img class="pri-img" src="{{asset('img/product/product-2.jpg')}}" alt="product">
                                    <img class="sec-img" src="{{asset('img/product/product-1.jpg')}}" alt="product">
                                </a>
                                <div class="product-badge">
                                    <div class="product-label new">
                                        <span>new</span>
                                    </div>
                                    <div class="product-label discount">
                                        <span>10%</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                </div>
                            </figure>
                            <div class="product-caption">
                                <p class="product-name">
                                    <a href="{{url('product_details')}}">Rose bouquet white</a>
                                </p>
                                <div class="price-box">
                                    <span class="price-regular">$55.00</span>
                                    <span class="price-old"><del>$80.00</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product single item end -->

                    <!-- product single item start -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item mt-40">
                            <figure class="product-thumb">
                                <a href="{{url('product_details')}}">
                                    <img class="pri-img" src="{{asset('img/product/product-4.jpg')}}" alt="product">
                                    <img class="sec-img" src="{{asset('img/product/product-3.jpg')}}" alt="product">
                                </a>
                                <div class="product-badge">
                                    <div class="product-label discount">
                                        <span>10%</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                </div>
                            </figure>
                            <div class="product-caption">
                                <p class="product-name">
                                    <a href="{{url('product_details')}}">Bouquet flowers pink</a>
                                </p>
                                <div class="price-box">
                                    <span class="price-regular">$60.00</span>
                                    <span class="price-old"><del>$70.00</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product single item end -->

                    <div class="col-12">
                        <div class="view-more-btn">
                            <a class="btn-hero btn-load-more" href="shop.html">view more products</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our product area end -->

        <!-- banner statistics start -->
        <section class="banner-statistics-right">
            <div class="container">
                <div class="row">
                    <!-- start banner item start -->
                    <div class="col-md-6">
                        <div class="banner-item banner-border">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="{{asset('img/banner/banner-1.jpg')}}" alt="">
                                </a>
                                <figcaption class="banner-content banner-content-right">
                                    <h2 class="text1">for you</h2>
                                    <h2 class="text2">Tulip Flower</h2>
                                    <a class="store-link" href="#">shop now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start banner item end -->

                    <!-- start banner item start -->
                    <div class="col-md-6">
                        <div class="banner-item banner-border">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="{{asset('img/banner/banner-2.jpg')}}" alt="">
                                </a>
                                <figcaption class="banner-content banner-content-right">
                                    <h2 class="text1">for you</h2>
                                    <h2 class="text2">Flower & Box</h2>
                                    <a class="store-link" href="#">shop now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start banner item end -->
                </div>
            </div>
        </section>
        <!-- banner statistics end -->

        <!-- trending product area start -->
        <section class="top-sellers section-space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>top seller</h2>
                            <p>Accumsan vitae pede lacus ut ullamcorper sollicitudin quisque libero</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-carousel--4 slick-row-15 slick-sm-row-10 slick-arrow-style">
                            <!-- product single item start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="{{url('product_details')}}">
                                        <img class="pri-img" src="{{asset('img/product/product-9.jpg')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/product/product-6.jpg')}}" alt="product">
                                    </a>
                                    <div class="product-badge">
                                        <div class="product-label new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                        <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-caption">
                                    <p class="product-name">
                                        <a href="{{url('product_details')}}">Blossom bouquet flower</a>
                                    </p>
                                    <div class="price-box">
                                        <span class="price-regular">$50.00</span>
                                        <span class="price-old"><del>$80.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="{{url('product_details')}}">
                                        <img class="pri-img" src="{{asset('img/product/product-10.jpg')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/product/product-1.jpg')}}" alt="product">
                                    </a>
                                    <div class="product-badge">
                                        <div class="product-label new">
                                            <span>new</span>
                                        </div>
                                        <div class="product-label discount">
                                            <span>10%</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                        <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-caption">
                                    <p class="product-name">
                                        <a href="{{url('product_details')}}">Rose bouquet white</a>
                                    </p>
                                    <div class="price-box">
                                        <span class="price-regular">$55.00</span>
                                        <span class="price-old"><del>$80.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="{{url('product_details')}}">
                                        <img class="pri-img" src="{{asset('img/product/product-11.jpg')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/product/product-8.jpg')}}" alt="product">
                                    </a>
                                    <div class="product-badge">
                                        <div class="product-label new">
                                            <span>new</span>
                                        </div>
                                        <div class="product-label discount">
                                            <span>15%</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                        <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-caption">
                                    <p class="product-name">
                                        <a href="{{url('product_details')}}">Hyacinth white stick</a>
                                    </p>
                                    <div class="price-box">
                                        <span class="price-regular">$30.00</span>
                                        <span class="price-old"><del>$55.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="{{url('product_details')}}">
                                        <img class="pri-img" src="{{asset('img/product/product-12.jpg')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/product/product-2.jpg')}}" alt="product">
                                    </a>
                                    <div class="product-badge">
                                        <div class="product-label new">
                                            <span>new</span>
                                        </div>
                                        <div class="product-label discount">
                                            <span>10%</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                        <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-caption">
                                    <p class="product-name">
                                        <a href="{{url('product_details')}}">Flowers bouquet pink</a>
                                    </p>
                                    <div class="price-box">
                                        <span class="price-regular">$60.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="{{url('product_details')}}">
                                        <img class="pri-img" src="{{asset('img/product/product-4.jpg')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/product/product-3.jpg')}}" alt="product">
                                    </a>
                                    <div class="product-badge">
                                        <div class="product-label discount">
                                            <span>10%</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                        <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-caption">
                                    <p class="product-name">
                                        <a href="{{url('product_details')}}">Bouquet flowers pink</a>
                                    </p>
                                    <div class="price-box">
                                        <span class="price-regular">$60.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="{{url('product_details')}}">
                                        <img class="pri-img" src="{{asset('img/product/product-9.jpg')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/product/product-10.jpg')}}" alt="product">
                                    </a>
                                    <div class="product-badge">
                                        <div class="product-label new">
                                            <span>new</span>
                                        </div>
                                        <div class="product-label discount">
                                            <span>30%</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                        <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-caption">
                                    <p class="product-name">
                                        <a href="{{url('product_details')}}">Orchid flower red stick</a>
                                    </p>
                                    <div class="price-box">
                                        <span class="price-regular">$80.00</span>
                                        <span class="price-old"><del>$90.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trending product area end -->

        <!-- Instagram Feed Area Start -->
        <section class="instagram-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- section title start -->
                        <div class="section-title text-center">
                            <h2 class="title">Instagram</h2>
                            <p class="sub-title">Displays an Instagram feed of your photos from your Instagram account on your website.</p>
                        </div>
                        <!-- section title start -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="instagram-carousel slick-row-5">
                            <!-- single instagram start -->
                            <div class="instagram-item">
                                <a href="#">
                                    <img src="{{asset('img/instagram/instagram-1.jpg')}}" alt="instagram">
                                </a>
                            </div>
                            <!-- single instagram end -->
                            <!-- single instagram start -->
                            <div class="instagram-item">
                                <a href="#">
                                    <img src="{{asset('img/instagram/instagram-2.jpg')}}" alt="instagram">
                                </a>
                            </div>
                            <!-- single instagram end -->
                            <!-- single instagram start -->
                            <div class="instagram-item">
                                <a href="#">
                                    <img src="{{asset('img/instagram/instagram-3.jpg')}}" alt="instagram">
                                </a>
                            </div>
                            <!-- single instagram end -->
                            <!-- single instagram start -->
                            <div class="instagram-item">
                                <a href="#">
                                    <img src="assets/img/instagram/instagram-4.jpg" alt="instagram">
                                </a>
                            </div>
                            <!-- single instagram end -->
                            <!-- single instagram start -->
                            <div class="instagram-item">
                                <a href="#">
                                    <img src="{{asset('img/instagram/instagram-5.jpg')}}" alt="instagram">
                                </a>
                            </div>
                            <!-- single instagram end -->
                            <!-- single instagram start -->
                            <div class="instagram-item">
                                <a href="#">
                                    <img src="{{asset('img/instagram/instagram-6.jpg')}}" alt="instagram">
                                </a>
                            </div>
                            <!-- single instagram end -->
                            <!-- single instagram start -->
                            <div class="instagram-item">
                                <a href="#">
                                    <img src="{{asset('img/instagram/instagram-7.jpg')}}" alt="instagram">
                                </a>
                            </div>
                            <!-- single instagram end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Instagram Feed Area End -->

    </main>
    <!-- main wrapper end -->

@endsection
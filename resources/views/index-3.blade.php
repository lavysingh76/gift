@extends('layouts.index')

@section('content')
    <!-- main wrapper start -->
    <main>
        <!-- slider area start -->
        <section class="slider-area">
            <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
                <!-- single slider item start -->
                <div class="hero-single-slide ">
                    <div class="hero-slider-item_2 bg-img" data-bg="{{asset('img/slider/home2-slide1.jpg')}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hero-slider-content slide-1">
                                        <span>valentine gift</span>
                                        <h1>Fresh Your Mind</h1>
                                        <h2>& Feeling love</h2>
                                        <a href="{{url('shop')}}" class="btn-hero">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item end -->

                <!-- single slider item start -->
                <div class="hero-single-slide">
                    <div class="hero-slider-item_2 bg-img" data-bg="{{asset('img/slider/home2-slide2.jpg')}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hero-slider-content slide-2">
                                        <span>valentine gift</span>
                                        <h1>Fresh Your Mind</h1>
                                        <h2>& Feeling love</h2>
                                        <a href="{{url('shop')}}" class="btn-hero">shop now</a>
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

        <!-- service policy start -->
        <section class="service-policy-area section-space">
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

        <!-- our product area start -->
        <section class="new-product section-space">
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
                                    <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
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
                                    <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
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
                                    <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
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
                                    <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
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
                                    <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
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
                                    <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
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
                                    <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
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
                                    <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
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
                            <a class="btn-hero btn-load-more" href="{{url('shop')}}">view more products</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our product area end -->

        <!-- banner statistics start -->
        <section class="banner-statistics">
            <div class="container">
                <div class="row mbn-30">
                    <!-- start store item -->
                    <div class="col-md-3 col-sm-6 order-sm-1 order-md-1">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="{{asset('img/banner/banner-3.jpg')}}" alt="">
                                </a>
                                <figcaption class="banner-content banner-text-top">
                                    <h2 class="text1">Top friday</h2>
                                    <h2 class="text2">Red Tulip</h2>
                                    <a class="store-link" href="#">buy it now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->

                    <!-- start store item -->
                    <div class="col-md-6 order-sm-3 order-md-2">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="{{asset('img/banner/banner-4.jpg')}}" alt="">
                                </a>
                                <figcaption class="banner-content banner-content-shape">
                                    <p>Clearance Sales</p>
                                    <h4>Get Up 20% Off</h4>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->

                    <!-- start store item -->
                    <div class="col-md-3 col-sm-6 order-sm-2 order-md-3">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="{{asset('img/banner/banner-5.jpg')}}" alt="">
                                </a>
                                <figcaption class="banner-content banner-text-top">
                                    <h2 class="text1">Black friday</h2>
                                    <h2 class="text2">White Orchid</h2>
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
                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                        <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
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
                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                        <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
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
                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                        <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
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
                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                        <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
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
                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                        <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
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
                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                        <a href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
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

        <!-- latest news area start -->
        <section class="latest-news section-space pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>latest blog</h2>
                            <p>Accumsan vitae pede lacus ut ullamcorper sollicitudin quisque libero</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="latest-blog-carousel slick-arrow-style slick-row-15">
                            <!-- blog sinle post start -->
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="{{url('blog_details')}}">
                                        <img src="{{asset('img/blog/blog-details-4.jpg')}}" alt="">
                                    </a>
                                    <div class="post-date">
                                        <p class="date">25</p>
                                        <p class="month">Apr</p>
                                    </div>
                                </div>
                                <div class="post-info-wrapper">
                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="{{url('blog_details')}}">Flowers daisy pink stick</a>
                                        </h2>
                                        <div class="post-meta">
                                            <div class="post-author">
                                                Written by: <a href="#">Admin</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-summary">
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                            posuere libero eu augue.
                                        </p>
                                    </div>
                                    <a href="{{url('blog_details')}}" class="btn-read">read more...</a>
                                </div>
                            </div>
                            <!-- blog sinle post end -->

                            <!-- blog sinle post start -->
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="{{url('blog_details')}}">
                                        <img src="{{asset('img/blog/blog-details-1.jpg')}}" alt="">
                                    </a>
                                    <div class="post-date">
                                        <p class="date">10</p>
                                        <p class="month">May</p>
                                    </div>
                                </div>
                                <div class="post-info-wrapper">
                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="{{url('blog_details')}}">Flowers bouquet pink</a>
                                        </h2>
                                        <div class="post-meta">
                                            <div class="post-author">
                                                Written by: <a href="#">Admin</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-summary">
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                            posuere libero eu augue.
                                        </p>
                                    </div>
                                    <a href="{{url('blog_details')}}" class="btn-read">read more...</a>
                                </div>
                            </div>
                            <!-- blog sinle post end -->

                            <!-- blog sinle post start -->
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="{{url('blog_details')}}">
                                        <img src="{{asset('img/blog/blog-details-2.jpg')}}" alt="">
                                    </a>
                                    <div class="post-date">
                                        <p class="date">10</p>
                                        <p class="month">Jun</p>
                                    </div>
                                </div>
                                <div class="post-info-wrapper">
                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="{{url('blog_details')}}">Blossom bouquet flower</a>
                                        </h2>
                                        <div class="post-meta">
                                            <div class="post-author">
                                                Written by: <a href="#">Admin</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-summary">
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                            posuere libero eu augue.
                                        </p>
                                    </div>
                                    <a href="{{url('blog_details')}}" class="btn-read">read more...</a>
                                </div>
                            </div>
                            <!-- blog sinle post end -->

                            <!-- blog sinle post start -->
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="{{url('blog_details')}}">
                                        <img src="{{asset('img/blog/blog-details-3.jpg')}}" alt="">
                                    </a>
                                    <div class="post-date">
                                        <p class="date">20</p>
                                        <p class="month">Mar</p>
                                    </div>
                                </div>
                                <div class="post-info-wrapper">
                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="{{url('blog_details')}}">Flowers daisy pink stick</a>
                                        </h2>
                                        <div class="post-meta">
                                            <div class="post-author">
                                                Written by: <a href="#">Admin</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-summary">
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                            posuere libero eu augue.
                                        </p>
                                    </div>
                                    <a href="{{url('blog_details')}}" class="btn-read">read more...</a>
                                </div>
                            </div>
                            <!-- blog sinle post end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- latest news area end -->

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
                                    <img src="{{asset('img/instagram/instagram-4.jpg')}}" alt="instagram">
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
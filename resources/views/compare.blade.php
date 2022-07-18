@extends('layouts.index')

@section('content')


    <!-- main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area common-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>compare</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">compare</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- compare main wrapper start -->
        <div class="compare-page-wrapper section-space pb-0">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Compare Page Content Start -->
                            <div class="compare-page-content-wrap">
                                <div class="compare-table table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="first-column">Product</td>
                                                <td class="product-image-title">
                                                    <a href="{{url('product_details')}}" class="image">
                                                        <img class="img-fluid" src="{{asset('img/product/product-1.jpg')}}" alt="Compare Product">
                                                    </a>
                                                    <a href="#" class="category">Daimond</a>
                                                    <a href="{{url('product_details')}}" class="title">Flowers bouquet pink</a>
                                                </td>
                                                <td class="product-image-title">
                                                    <a href="{{url('product_details')}}" class="image">
                                                        <img class="img-fluid" src="{{asset('img/product/product-2.jpg')}}" alt="Compare Product">
                                                    </a>
                                                    <a href="#" class="category">Gold</a>
                                                    <a href="{{url('product_details')}}" class="title">Jasmine flowers white</a>
                                                </td>
                                                <td class="product-image-title">
                                                    <a href="{{url('product_details')}}" class="image">
                                                        <img class="img-fluid" src="{{asset('img/product/product-3.jpg')}}" alt="Compare Product">
                                                    </a>
                                                    <a href="#" class="category">Ring</a>
                                                    <a href="{{url('product_details')}}" class="title">Blossom bouquet flower</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Description</td>
                                                <td class="pro-desc">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident
                                                        nulla, explicabo iste a rerum pariatur.</p>
                                                </td>
                                                <td class="pro-desc">
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit
                                                        commodi obcaecati cumque consectetur alias incidunt?</p>
                                                </td>
                                                <td class="pro-desc">
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius,
                                                        facere. Fuga asperiores inventore iste tempora.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Price</td>
                                                <td class="pro-price">$295</td>
                                                <td class="pro-price">$275</td>
                                                <td class="pro-price">$395</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Color</td>
                                                <td class="pro-color">Black</td>
                                                <td class="pro-color">Red</td>
                                                <td class="pro-color">Blue</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                                <td class="pro-stock">Stock Out</td>
                                                <td class="pro-stock">In Stock</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Add to cart</td>
                                                <td><a href="{{url('cart')}}" class="btn btn__bg">Add to Cart</a></td>
                                                <td><a href="{{url('cart')}}" class="btn btn__bg disabled">Add to Cart</a></td>
                                                <td><a href="{{url('cart')}}" class="btn btn__bg">Add to Cart</a></td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Rating</td>
                                                <td class="pro-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </td>
                                                <td class="pro-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </td>
                                                <td class="pro-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Remove</td>
                                                <td class="pro-remove">
                                                    <button><i class="fa fa-trash-o"></i></button>
                                                </td>
                                                <td class="pro-remove">
                                                    <button><i class="fa fa-trash-o"></i></button>
                                                </td>
                                                <td class="pro-remove">
                                                    <button><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Compare Page Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- compare main wrapper end -->
    </main>
    <!-- main wrapper end -->
@endsection
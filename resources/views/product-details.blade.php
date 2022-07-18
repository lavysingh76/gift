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
                                <h1>product details</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">product details</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- page main wrapper start -->
        <div class="shop-main-wrapper section-space">
            <div class="container">
                <div class="row">
                    <!-- product details wrapper start -->
                    <div class="col-lg-12 order-1 order-lg-2">
                        <!-- product details inner end -->
                        @foreach($s_product as $product)
                        <div class="product-details-inner">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="product-large-slider">
                                        <div class="pro-large-img img-zoom">
                                            <img src="{{asset('admin/files/product/'.$product->product_image)}} "alt="product-details" />
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="product-details-des">
                                        <h3 class="product-name">{{$product->product_name}}</h3>
                                        <!-- <div class="ratings d-flex">
                                            <span><i class="lnr lnr-star"></i></span>
                                            <span><i class="lnr lnr-star"></i></span>
                                            <span><i class="lnr lnr-star"></i></span>
                                            <span><i class="lnr lnr-star"></i></span>
                                            <span><i class="lnr lnr-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 Reviews</span>
                                            </div>
                                        </div> -->
                                        @php 
                                            $dis = $product->price*$product->discount/100;
                                            $dis_price = $product->price-$dis;
                                        @endphp
                                        <div class="price-box">
                                        @if($product->discount > 0)
                                        <span class="price-regular"><i class="fa fa-inr"></i>  {{$dis_price}}.00</span>
                                        <span class="price-old"><del><i class="fa fa-inr"></i> {{ $product->price}}</del></span>
                                        @else
                                        <span class="price-regular"><i class="fa fa-inr"></i>  {{$product->price}}</span>
                                        @endif
                                        </div>
                                        <!-- <h5 class="offer-text"><strong>Hurry up</strong>! offer ends in:</h5>
                                        <div class="product-countdown" data-countdown="2022/12/16"></div>
                                        <div class="availability">
                                            <i class="fa fa-check-circle"></i>
                                            <span>200 in stock</span>
                                        </div> -->
                                        <p class="pro-desc">{{$product->detail}}</p>
                                        <!-- <div class="quantity-cart-box d-flex align-items-center">
                                            <h5>qty:</h5>
                                            <div class="quantity">
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                            </div>
                                            <div class="action_link">
                                                <a class="btn btn-cart2" href="#">Add to cart</a>
                                            </div>
                                        </div> -->
                                        <!-- <div class="pro-size">
                                            <h5>size :</h5>
                                            <select class="nice-select">
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>
                                        </div> -->
                                        <!-- <div class="color-option">
                                            <h5>color :</h5>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                        </div> -->
                                        <!-- <div class="useful-links">
                                            <a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                    class="lnr lnr-sync"></i>compare</a>
                                            <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                    class="lnr lnr-heart"></i>wishlist</a>
                                        </div> -->
                                        <div class="like-icon">
                                            <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
                                            <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                                            <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
                                            <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- product details inner end -->

                        <!-- product details reviews start -->
                        <div class="product-details-reviews section-space pb-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-review-info">
                                        <ul class="nav review-tab">
                                            <li>
                                                <a class="active" data-bs-toggle="tab" href="#tab_one">description</a>
                                            </li>
                                            <li>
                                                <a data-bs-toggle="tab" href="#tab_two">information</a>
                                            </li>
                                            <li>
                                                <a data-bs-toggle="tab" href="#tab_three">reviews (1)</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content reviews-tab">
                                            <div class="tab-pane fade show active" id="tab_one">
                                            @foreach($s_product as $product)
                                                <div class="tab-one">
                                                    <p>{{$product->detail}}</p>
                                                </div>
                                            @endforeach
                                            </div>
                                            <div class="tab-pane fade" id="tab_two">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>color</td>
                                                            <td>black, blue, red</td>
                                                        </tr>
                                                        <tr>
                                                            <td>size</td>
                                                            <td>L, M, S</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="tab_three">
                                                <form action="#" class="review-form">
                                                    <h5>1 review for <span>Chaz Kangeroo</span></h5>
                                                    <div class="total-reviews">
                                                        <div class="rev-avatar">
                                                            <img src="assets/img/about/avatar.jpg" alt="">
                                                        </div>
                                                        <div class="review-box">
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                            </div>
                                                            <div class="post-author">
                                                                <p><span>admin -</span> 30 Mar, 2019</p>
                                                            </div>
                                                            <p>Aliquam fringilla euismod risus ac bibendum. Sed sit
                                                                amet sem varius ante feugiat lacinia. Nunc ipsum nulla,
                                                                vulputate ut venenatis vitae, malesuada ut mi. Quisque
                                                                iaculis, dui congue placerat pretium, augue erat
                                                                accumsan lacus</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span class="text-danger">*</span>
                                                                Your Name</label>
                                                            <input type="text" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span class="text-danger">*</span>
                                                                Your Email</label>
                                                            <input type="email" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span class="text-danger">*</span>
                                                                Your Review</label>
                                                            <textarea class="form-control" required></textarea>
                                                            <div class="help-block pt-10"><span
                                                                    class="text-danger">Note:</span>
                                                                HTML is not translated!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span class="text-danger">*</span>
                                                                Rating</label>
                                                            &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                            <input type="radio" value="1" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="2" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="3" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="4" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="5" name="rating" checked>
                                                            &nbsp;Good
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="sqr-btn" type="submit">Continue</button>
                                                    </div>
                                                </form> <!-- end of review-form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details reviews end -->
                    </div>
                    <!-- product details wrapper end -->
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->

        <!-- related product area start -->
        <section class="related-products">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>Related Products</h2>
                            <p>Accumsan vitae pede lacus ut ullamcorper sollicitudin quisque libero</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-carousel--4 slick-row-15 slick-sm-row-10 slick-arrow-style">
                            <!-- product single item starwishlist.htmlt -->
                            @foreach($re_product as $products)
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="{{url('product_details/'.$products->id)}}">
                                        <img class="pri-img" src="{{asset('admin/files/product/'.$products->product_image)}}" alt="product" height="150px">
                                        <img class="sec-img" src="{{asset('admin/files/product/'.$products->product_image)}}" alt="product" height="150px">
                                    </a>
                                    <div class="product-badge">
                                        <div class="product-label new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" onclick="valueAssin({{$loop->index}})" data-bs-toggle="modal"  data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                        <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-caption">
                                    <p class="product-name">
                                        <a href="{{url('product_details/'.$products->id)}}">{{$products->product_name}}</a>
                                    </p>
                                    @php 
                                        $dis = $products->price*$products->discount/100;
                                        $dis_price = $products->price-$dis;
                                    @endphp
                                    <div class="price-box">
                                        @if($products->discount > 0)
                                        <span class="price-regular"><i class="fa fa-inr"></i>{{$dis_price}}.00</span>
                                        <span class="price-old"><del><i class="fa fa-inr"></i>{{$products->price}}</del></span>
                                        @else
                                        <span class="price-regular"><i class="fa fa-inr"></i>{{$products->price}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- related product area end -->
    </main>
    <!-- main wrapper end -->
<script>
    var product = <?php echo json_encode($re_product) ?>;
</script>
@endsection
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
                                <h1>shop</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">shop</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- page main wrapper start -->
        <div class="shop-main-wrapper section-space pb-0">
            <div class="container">
                <div class="row">
                    <!-- sidebar area start -->
                    <div class="col-lg-3 order-2 order-lg-1">
                        <aside class="sidebar-wrapper">
                            <!-- single sidebar start -->
                            <div class="sidebar-single">
                                <h3 class="sidebar-title">categories</h3>
                                <div class="sidebar-body">
                                    
                                                
                                    <ul class="shop-categories">
                                    @foreach($categories as $category)
                                        <li><a href="{{url('category_page/'.$category->category_id)}}">{{$category->name}}<span>{{$category->product_count}}</span></a></li>
                                    @endforeach  
                                    </ul> 
                                   
                                </div>
                            </div>
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <!-- <div class="sidebar-single">
                                <h3 class="sidebar-title">price</h3>
                                <div class="sidebar-body">
                                    <div class="price-range-wrap">
                                        <div class="price-range" data-min="0" data-max="10000"></div>
                                        <div class="range-slider">
                                            <form action="#" class="d-flex align-items-center justify-content-between">
                                                <div class="price-input">
                                                    <label for="amount">Price: </label>
                                                    <input type="text" id="amount">
                                                </div>
                                                <button class="filter-btn">filter</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <!-- <div class="sidebar-single">
                                <h3 class="sidebar-title">brand</h3>
                                <div class="sidebar-body">
                                    <ul class="checkbox-container categories-list">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Studio (3)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">Hastech (4)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">Quickiin (15)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Graphic corner (10)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">devItems (12)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <!-- <div class="sidebar-single">
                                <h3 class="sidebar-title">color</h3>
                                <div class="sidebar-body">
                                    <ul class="checkbox-container categories-list">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                <label class="custom-control-label" for="customCheck12">black (20)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                <label class="custom-control-label" for="customCheck13">red (6)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                <label class="custom-control-label" for="customCheck14">blue (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                <label class="custom-control-label" for="customCheck11">green (5)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                <label class="custom-control-label" for="customCheck15">pink (4)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <!-- <div class="sidebar-single">
                                <h3 class="sidebar-title">size</h3>
                                <div class="sidebar-body">
                                    <ul class="checkbox-container categories-list">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck111">
                                                <label class="custom-control-label" for="customCheck111">S (4)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck222">
                                                <label class="custom-control-label" for="customCheck222">M (5)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck333">
                                                <label class="custom-control-label" for="customCheck333">L (7)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck444">
                                                <label class="custom-control-label" for="customCheck444">XL (3)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <!-- <div class="sidebar-banner">
                                <div class="img-container">
                                    <a href="#">
                                        <img src="{{asset('img/banner/sidebar-banner.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div> -->
                            <!-- single sidebar end -->
                        </aside>
                    </div>
                    <!-- sidebar area end -->

                    <!-- shop main wrapper start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="shop-product-wrapper">
                            <!-- shop product top wrap start -->
                            <div class="shop-top-bar">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                        <div class="top-bar-left">
                                            <div class="product-view-mode">
                                                <a class="active" href="#" data-target="grid-view" data-bs-toggle="tooltip" title="Grid View"><i class="fa fa-th"></i></a>
                                                <a href="#" data-target="list-view" data-bs-toggle="tooltip" title="List View"><i class="fa fa-list"></i></a>
                                            </div>
                                            <div class="product-amount">
                                                <p>Showing 1–5 of 8 results</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                        <div class="top-bar-right">
                                            <div class="product-short">
                                                <p>Sort By : </p>
                                                <select class="nice-select" name="sortby">
                                                    <option value="trending">Relevance</option>
                                                    <option value="sales">Name (A - Z)</option>
                                                    <option value="sales">Name (Z - A)</option>
                                                    <option value="rating">Price (Low &gt; High)</option>
                                                    <option value="date">Rating (Lowest)</option>
                                                    <option value="price-asc">Model (A - Z)</option>
                                                    <option value="price-asc">Model (Z - A)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop product top wrap start -->

                            <!-- product item list wrapper start -->
                            <div class="shop-product-wrap grid-view row mbn-40">
                                <!-- product single item start -->
                                @foreach($pro as $product)
                                <div class="col-md-4 col-sm-6">
                                    <!-- product grid start -->
                                    
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="{{url('product_details/'.$product->id)}}">
                                                <img class="pri-img" src="{{asset('admin/files/product/'.$product->product_image)}}" alt="product" height="250px">
                                                <img class="sec-img" src="{{asset('admin/files/product/'.$product->product_image)}}" alt="product" height="250px">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                <div class="product-label discount">
                                                    @if($product->discount > 0)
                                                    <span>{{$product->discount}}%</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" onclick="valueAssin({{$loop->index}})" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                                <a href="{{url('cart')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>
                                            </div>
                                        </figure>
                                        <div class="product-caption">
                                            <p class="product-name">
                                                <a href="{{url('product_details/'.$product->id)}}">{{$product->product_name}}</a>
                                            </p>
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
                                        </div>
                                    </div>
                                   
                                    <!-- product grid end -->

                                     
                                </div>
                                <!-- product single item start -->
                                @endforeach
                               
                            </div>
                            <!-- product item list wrapper end -->

                            <!-- start pagination area -->
                            <!-- <div class="paginatoin-area text-center">
                                <ul class="pagination-box">
                                    <li><a class="previous" href="#"><i class="lnr lnr-chevron-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a class="next" href="#"><i class="lnr lnr-chevron-right"></i></a></li>
                                </ul>
                            </div> -->
                            <!-- end pagination area -->
                        </div>
                    </div>
                    <!-- shop main wrapper end -->
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->
    </main>
    <!-- main wrapper end -->
    <script>
    var product = <?php echo json_encode($pro) ?>;
    </script>
@endsection
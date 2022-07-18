  <!-- off-canvas menu start -->
  <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="lnr lnr-cross"></i>
            </div>

            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search Here...">
                        <button class="search-btn"><i class="lnr lnr-magnifier"></i></button>
                    </form>
                </div>
                <!-- search box end -->

                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="{{url('/')}}">Home</a>
                                <ul class="dropdown">
                                    <li><a href="{{url('/')}}">Home version 01</a></li>
                                    <li><a href="{{url('home_2')}}">Home version 02</a></li>
                                    <li><a href="{{url('home_3')}}">Home version 03</a></li>
                                    <li><a href="{{url('home_4')}}">Home version 04</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">pages</a>
                                <ul class="megamenu dropdown">
                                    <li class="mega-title menu-item-has-children"><a href="#">column 01</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('shop')}}">shop grid left
                                                    sidebar</a></li>
                                            <li><a href="{{url('shop_grid_right_sidebar')}}">shop grid right
                                                    sidebar</a></li>
                                            <li><a href="{{url('shop_list_left_sidebar')}}">shop list left sidebar</a></li>
                                            <li><a href="{{url('shop_list_right_sidebar')}}">shop list right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title menu-item-has-children"><a href="#">column 02</a>
                                        <ul class="dropdown">
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
                                    <li class="mega-title menu-item-has-children"><a href="#">column 03</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('cart')}}">cart</a></li>
                                            <li><a href="{{url('checkout')}}">checkout</a></li>
                                            <li><a href="{{url('compare')}}">compare</a></li>
                                            <li><a href="{{url('wishlist')}}">wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title menu-item-has-children"><a href="#">column 04</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('my_account')}}">my-account</a></li>
                                            <li><a href="{{url('login')}}">login-register</a></li>
                                            <li><a href="{{url('contact_us')}}">contact us</a></li>
                                            <li><a href="{{url('faq')}}">faq's</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">shop</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><a href="#">shop grid layout</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('shop')}}">shop grid left sidebar</a></li>
                                            <li><a href="{{url('shop_grid_right_sidebar')}}">shop grid right sidebar</a></li>
                                            <li><a href="{{url('shop_grid_full_3_col')}}">shop grid full 3 col</a></li>
                                            <li><a href="{{url('shop_grid_full_4_col')}}">shop grid full 4 col</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">shop list layout</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('shop_list_left_sidebar')}}">shop list left sidebar</a></li>
                                            <li><a href="{{url('shop_list_right_sidebar')}}">shop list right sidebar</a></li>
                                            <li><a href="{{url('shop_list_full_width')}}">shop list full width</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">products details</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('product_details')}}">product details</a></li>
                                            <li><a href="{{url('product_details_affiliate')}}">product details affiliate</a></li>
                                            <li><a href="{{url('product_details_variable')}}">product details variable</a></li>
                                            <li><a href="{{url('product_details_group')}}">product details group</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="{{url('blog_left_sidebar')}}">blog left sidebar</a></li>
                                    <li><a href="{{url('blog_right_sidebar')}}">blog right sidebar</a></li>
                                    <li><a href="{{url('blog_grid_full_width')}}">blog grid no sidebar</a></li>
                                    <li><a href="{{url('blog_details')}}">blog details</a></li>
                                    <li><a href="{{url('blog_details_left_sidebar')}}">blog details left sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('contact_us')}}">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->

                <div class="mobile-settings">
                    <ul class="nav">
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="currency" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Currency
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="currency">
                                    <a class="dropdown-item" href="#">$ USD</a>
                                    <a class="dropdown-item" href="#">$ EURO</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="myaccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Account
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                    <a class="dropdown-item" href="{{url('my_account')}}">my account</a>
                                    <a class="dropdown-item" href="{{url('login')}}"> login</a>
                                    <a class="dropdown-item" href="{{url('register')}}">register</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li><i class="fa fa-mobile"></i>
                                <a href="#">0123456789</a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <a href="#">info@yourdomain.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
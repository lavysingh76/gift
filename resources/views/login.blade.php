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
                                <h1>login</h1>
                                <!-- <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">login</li>
                                </ul> -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- login register wrapper start -->
        <div class="login-register-wrapper section-space pb-0">
            <div class="container">
                <div class="member-area-from-wrap">
                    <div class="row justify-content-center">
                        <!-- Login Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap">
                                <h2>Sign In</h2>
                                <form action="{{url('do_login')}}" method="post">
                                    @csrf
                                    <div class="single-input-item">
                                        <input type="email" placeholder="Email or Username" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="password" placeholder="Enter your Password" required />
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                    <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                                </div>
                                            </div>
                                            <a href="#" class="forget-pwd">Forget Password?</a>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="btn btn__bg">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login Content End -->

                        <!-- Register Content Start -->
                        <!-- <div class="col-lg-6">
                            <div class="login-reg-form-wrap sign-up-form">
                                <h2>Singup Form</h2>
                                <form action="#" method="post">
                                    <div class="single-input-item">
                                        <input type="text" placeholder="Full Name" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="email" placeholder="Enter your Email" required />
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" placeholder="Enter your Password" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" placeholder="Repeat your Password" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="subnewsletter">
                                                    <label class="custom-control-label" for="subnewsletter">Subscribe
                                                        Our Newsletter</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="btn btn__bg">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                        <!-- Register Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- login register wrapper end -->
    </main>
    <!-- main wrapper end -->

@endsection 
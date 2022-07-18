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
                                <h1>Faq's</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Faq's</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- faq area start -->
        <div class="faq-main-wrapper section-space pb-0">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-inner">
                            <div class="faq-title">
                                <h2>General Question</h2>
                            </div>
                            <div class="accordion" id="general-question">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="lnr lnr-graduation-hat"></i>
                                                money back guarantee
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#general-question">
                                        <div class="card-body">
                                            This is our motto and we are experts in delivering the best 100% organicfoods on the market. We work with more than 60 farms all over the country. We’re a locally owned business with staff that has decades of experiencein the field of health and firm roots in the health food industry
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
                                                <i class="lnr lnr-graduation-hat"></i>
                                                Fast Free Delivery
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#general-question">
                                        <div class="card-body">
                                            This is our motto and we are experts in delivering the best 100% organicfoods on the market. We work with more than 60 farms all over the country. We’re a locally owned business with staff that has decades of experiencein the field of health and firm roots in the health food industry
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree">
                                                <i class="lnr lnr-graduation-hat"></i>
                                                Rich Experience
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#general-question">
                                        <div class="card-body">
                                            This is our motto and we are experts in delivering the best 100% organicfoods on the market. We work with more than 60 farms all over the country. We’re a locally owned business with staff that has decades of experiencein the field of health and firm roots in the health food industry
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfive">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-controls="collapseFour">
                                                <i class="lnr lnr-graduation-hat"></i>
                                                Fast Free Delivery
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseFour" class="collapse" aria-labelledby="headingfive" data-bs-parent="#general-question">
                                        <div class="card-body">
                                            This is our motto and we are experts in delivering the best 100% organicfoods on the market. We work with more than 60 farms all over the country. We’re a locally owned business with staff that has decades of experiencein the field of health and firm roots in the health food industry
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingsix">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-controls="collapseFive">
                                                <i class="lnr lnr-graduation-hat"></i>
                                                Rich Experience
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseFive" class="collapse" aria-labelledby="headingsix" data-bs-parent="#general-question">
                                        <div class="card-body">
                                            This is our motto and we are experts in delivering the best 100% organicfoods on the market. We work with more than 60 farms all over the country. We’re a locally owned business with staff that has decades of experiencein the field of health and firm roots in the health food industry
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-inner faq-inner-2">
                            <div class="faq-title">
                                <h2>Payment & Gift card</h2>
                            </div>
                            <div class="accordion" id="payment">
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                                <i class="lnr lnr-graduation-hat"></i>
                                                Lorem ipsum dolor sit
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-bs-parent="#payment">
                                        <div class="card-body">
                                            This is our motto and we are experts in delivering the best 100% organicfoods on the market. We work with more than 60 farms all over the country. We’re a locally owned business with staff that has decades of experiencein the field of health and firm roots in the health food industry
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSeven">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-controls="collapseSeven">
                                                <i class="lnr lnr-graduation-hat"></i>
                                                Fast Free Delivery
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-bs-parent="#payment">
                                        <div class="card-body">
                                            This is our motto and we are experts in delivering the best 100% organicfoods on the market. We work with more than 60 farms all over the country. We’re a locally owned business with staff that has decades of experiencein the field of health and firm roots in the health food industry
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingEight">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-controls="collapseEight">
                                                <i class="lnr lnr-graduation-hat"></i>
                                                Rich Experience
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-bs-parent="#payment">
                                        <div class="card-body">
                                            This is our motto and we are experts in delivering the best 100% organicfoods on the market. We work with more than 60 farms all over the country. We’re a locally owned business with staff that has decades of experiencein the field of health and firm roots in the health food industry
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-controls="collapseNine">
                                                <i class="lnr lnr-graduation-hat"></i>
                                                Fast Free Delivery
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-bs-parent="#payment">
                                        <div class="card-body">
                                            This is our motto and we are experts in delivering the best 100% organicfoods on the market. We work with more than 60 farms all over the country. We’re a locally owned business with staff that has decades of experiencein the field of health and firm roots in the health food industry
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTen">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-controls="collapseTen">
                                                <i class="lnr lnr-graduation-hat"></i>
                                                Rich Experience
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-bs-parent="#payment">
                                        <div class="card-body">
                                            This is our motto and we are experts in delivering the best 100% organicfoods on the market. We work with more than 60 farms all over the country. We’re a locally owned business with staff that has decades of experiencein the field of health and firm roots in the health food industry
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq area end -->
    </main>
    <!-- main wrapper end -->
@endsection
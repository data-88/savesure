@extends('Frontend.master')

@section('content')
    {{--<div class="container">
        <!-- Row of columns -->
        <div class="row" style="padding-top:20px;">
            <div class="col-md-4">
                <img src="{{ asset('img/bike.png') }}" alt="Generic placeholder image"
                    width="140" height="140">
                <h2>Bike</h2>
                <p><a class="btn btn-secondary" href="/twowheeler" role="button">Get Quotes &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/car.png') }}" alt="Generic placeholder image" width="140"
                    height="140">
                <h2>Car</h2>
                <p><a class="btn btn-secondary" href="/car" role="button">Get Quotes &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <img  src="{{ asset('img/bus.png') }}" alt="Generic placeholder image" width="140"
                    height="140">
                <h2>Commercial Vehicle</h2>
                <p><a class="btn btn-secondary" href="#" role="button">Get Quotes &raquo;</a></p>
            </div>
        </div>--}}
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="slider_text">
                            <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">Compare insurance quotes instantly</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start  -->
        <div class="service_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center mb-90">
                            <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"></span>
                            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">What we offer for you</h3>
                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">We provide online instant quote comparision to help you find the perfect insurance according to your term</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="service_icon_wrap text-center">
                                <div class="service_icon ">
                                    <img src="{{ asset('img/motorcycle.png') }}" alt="">
                                </div>
                            </div>
                            <div class="info text-center">
                                <span>Two Wheeler</span>
                            </div>
                            <div class="service_content">
                                <ul>
                                    <li> Compare quotes on your Bike </li>
                                </ul>
                                <div class="apply_btn">
                                    <a class="boxed-btn3" href="/twowheeler">Get Quotes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="service_icon_wrap text-center">
                                <div class="service_icon ">
                                    <img src="{{ asset('img/car-1.png') }}" alt="">
                                </div>
                            </div>
                            <div class="info text-center">
                                <span>Private Vehicles</span>
                            </div>
                            <div class="service_content">
                                <ul>
                                    <li> Compare Quotes on Car </li>
                                </ul>
                                <div class="apply_btn">
                                    <a class="boxed-btn3" href="/car">Get Quotes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="service_icon_wrap text-center">
                                <div class="service_icon ">
                                    <img src="{{ asset('img/public.png') }}" alt="">
                                </div>
                            </div>
                            <div class="info text-center">
                                <span>Commercial Vehicles</span>
                            </div>
                            <div class="service_content">
                                <ul>
                                    <li> Compare Quotes for Bus</li>
                                </ul>
                                <div class="apply_btn">
                                    <a class="boxed-btn3" href="#">Get Quotes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service_area_end  -->

        {{--<!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron" style="background-color:white;">
            <hr>
            <div class="container">
                <h1 class="display-3" style="text-align: center;">Why choose us?</h1>
                <div class="row">
                    <div class="col-md-4">
                        <h2>Save Time!</h2>
                        <p>Save your valuable time by quickly comparing quotes with out the hassle of dealing with
                            agents.</p>
                    </div>

                    <div class="col-md-4">
                        <h2>Best Prices!</h2>
                        <p>Our Comparision tool provides total transparency and lists the best price.</p>
                    </div>

                    <div class="col-md-4">
                        <h2>Quick and Easy!</h2>
                        <p>With our user friendly interface it is quick and easy to find the right policy for your
                            automobile.</p>
                    </div>
                </div>
                <!-- <p><a class="btn btn-primary btn-lg" href="/about" role="button">Learn more &raquo;</a></p> -->
            </div>
        </div>
        <hr>
    </div> --}}
        <div class="works_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center mb-90">
                            <span class="wow lightSpeedIn" data-wow-duration="1s" data-wow-delay=".1s"></span>
                            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">How it Works</h3>
                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">We provide online instant quote comparision that suit your term</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <span>
                            01
                        </span>
                            <h3>Enter Vehicle Details</h3>
                            <p>We will display quotes according to your terms</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <span>
                            02
                        </span>
                            <h3>Preview Insurance Companies</h3>
                            <p>Choose the right company according to your plans</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <span>
                            03
                        </span>
                            <h3>Choose the Company</h3>
                            <p>According to your choice we will display the companies
                                location and contact information</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

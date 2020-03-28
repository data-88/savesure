@extends('Frontend.master')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>About Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="works_area" style="padding: 50px">
        <div class="container">
            <div class="row">
                <div class="col col-md-12">
                    <div class="section_title text-center mb-90">
                        <span class="wow lightSpeedIn" data-wow-duration="1s" data-wow-delay=".1s"></span>
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Welcome to Automoblie
                            Premium Comparision</h3>
                    </div>
                    <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <p>
                            {!! $abouts->about_text !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="section_title text-center mb-90">
                        <span class="wow lightSpeedIn" data-wow-duration="1s" data-wow-delay=".1s"></span>
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">How it Works</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">We provide online instant
                            quote comparision that suit your term</p>
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

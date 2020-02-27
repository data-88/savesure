@extends('Frontend.master')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Display Area</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    {{--Info-Section--}}
    <div class="container">
        <div class="row" style="background-color: #2D77A2">
            <div class="col-sm-2" style="text-align: center; margin-top: 25px">
                <a href="/twowheeler">< Back to details</a>
            </div>
            <div class="col">
                <h6>Bike Brand:</h6>
                <h6>Bike Model: Basic</h6>
                <h6>Bike Variant: </h6>
            </div>
            <div class="col">
                <h6>Registration Date:</h6>
            </div>
        </div>
    </div>
    {{-- Display Section --}}
    <div class="container" style="padding-top: 10px">
        <div class="row" style="height: 500px">
            <div class="col-lg-2" style="background-color:lavender;">
                <div class="" style="margin: auto">
                    <input type="checkbox" name="thirdparty"  id="thirdparty">
                    <label for="thirdparty">Third Party</label>
                </div>
                <div class="" style="margin: auto">
                    <input type="checkbox" id="comprehensive">
                    <label for="comprehensive">Comprehensive</label>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="container">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h5>Image</h5>
                                </div>
                                <div class="col-sm-3">
                                    <h5>IDV</h5>
                                </div>
                                <div class="col-sm-3">
                                    <h5>Policy Type</h5>
                                </div>
                                <div class="col-sm-3">
                                    <h5>Premium</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

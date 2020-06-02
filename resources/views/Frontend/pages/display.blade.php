@extends('Frontend.master')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Proposal Area</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    {{--Info-Section--}}
    <div class="container-fluid" style="background-color: #2D77A2">
        <div class="container" style="padding: 10px">
            <div class="row">
                <div class="col-sm-3" style="text-align: center; margin-top: 25px">
                    <h6>Bike Insurance</h6>
                </div>
                <div class="col-sm-3">
                    <h6>Bike Brand: {{ $data->brand_name }}</h6>
                    <h6>Bike Model: {{ $data->type_name }}</h6>
                    <h6>Bike Variant: {{ $data->variant_name }} </h6>
                </div>
                <div class="col col-md-3" style="text-align: center; margin-top: 25px">
                    <h6>Premium: रू <span id="ccPrem">{{request('userValue') ?? '' }}</span></h6>
                </div>
                <div class="col-md-3" style="text-align: center; margin-top: 25px">
                    <h6>Registration Date: {{ $data->date }}</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding-top: 25px;">
        <div class="row">
            <div class="col col-sm-4">
                <div class="card" style="width: 20rem;text-align: center;">
                    <div class="card-body">
                        <img class="company_image" src="{{ asset('img/Companies/'.$company->image) }}"
                             alt="Company Image">
                        <h5 class="card-title">{{$company->name}}</h5>
                        <tr>
                            <td><h6>{{ $data->brand_name }} {{ $data->type_name }} {{ $data->variant_name }}</h6></td>
                        </tr>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4"><p>Excess Own Damage (EOD): </p></div>
                                    <div class="col-sm-8">
                                        <select class="form-control" style="width: 150px;">
                                            <option value="500" selected>500</option>
                                            <option value="1000">1000</option>
                                            <option value="2000">2000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" id="ncd">
                                <div class="row">
                                    <div class="col-sm-4"><p>No Claim Discount?</p></div>
                                    <div class="col-sm-8">
                                        <select class="noClaimDiscount form-control" id="noclaim" style="width: 150px;"
                                                required>
                                            <option value="0">0%</option>
                                            <option value="0.15">15%</option>
                                            <option value="0.25">25%</option>
                                            <option value="0.35">35%</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4"><p>Apply for Direct Business? </p></div>
                                    <div class="col-sm-8">
                                        <input type="radio" id="directBusiness-yes"> Yes
                                        <input type="radio" id="directBusiness-no"> No
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_content')
    <script type="text/javascript">
        var ncd;
        var ageOfBike=localStorage.getItem("age");
        $('#noclaim').change(function() {
            ncd = $(this).find(':selected').val();
            if (ncd == 0.15) {
                console.log(ageOfBike);
                console.log(ncd);
            }
        });

        if (ageOfBike == 0) {
            document.getElementById("ncd").style.visibility = hidden;
        } else if (ageOfBike > 0){
            document.getElementById("ncd").style.visibility = visible;
        }
    </script>
@endsection

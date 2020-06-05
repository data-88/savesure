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
    <div class="container-fluid" style="background-color: #2D77A2">
        <div class="container" style="padding: 10px">
            <div class="row">
                <div class="col-sm-3" style="text-align: center; margin-top: 25px">
                    <h6>Bike Insurance</h6>
                </div>
                <div class="col-md-3">
                    <h6>Bike Brand: {{ $data->brand_name }}</h6>
                    <h6>Bike Model: {{ $data->type_name }}</h6>
                    <h6>Bike Variant: {{ $data->variant_name }} </h6>
                </div>
                <div class="col col-md-3" style="text-align: center; margin-top: 25px">
                    <h6>Premium: रू <span id="ccPrem">{{$ccAmt}}</span></h6>
                </div>
                <div class="col-md-3" style="text-align: center; margin-top: 25px">
                    <h6>Registration Date: {{ $data->date }}</h6>
                </div>
            </div>
        </div>
    </div>

    {{-- Display Section --}}
    <div class="container" style="padding-top: 10px;">
        <div class="row">
            <div class="col col-lg-2 col-md-3 col-sm-12" style="padding-top: 10px;">
                <div>
                    <input class="basic-coverage" type="checkbox" onclick="return false" value=""
                           id="basic-coverage" checked>
                    <label for="basic-coverage">Third Party</label>
                </div>
                <div class="firstParty">
                    <input class="full_coverage" type="checkbox" name="comprehensive" id="full_coverage" value="1">
                    <label for="full_coverage">Comprehensive</label>
                </div>

                <div class="firstpartyform" id="slider" style="display: none; margin-top: 30px;">
                    <br>
                    <p>
                        <label for="idv_name">Sum Assured</label>
                        <input name="idv_name" type="text" id="amount" readonly
                               style="border:0; color:#f6931f; font-weight:bold;">
                    </p>
                    <br>
                </div>
                <div id="rsmt_div">
                    <input type="checkbox" class="rsmt-coverage" id="rsmt" value="2">
                    <label for="rsmt">Riot/ Strike/ Malicious/ Terrorism Damage</label>
                </div>
            </div>
            {{--Company Display Section--}}
            <div class="col col-lg-10 col-md-9 col-sm-12">
                <div class="row">
                    @foreach ($companies as $company)
                        <div class="col col-md-4 col-sm-6 col-xs-12" style="text-align: center; padding-bottom: 10px">
                            <div class="card">
                                <div class="card-body">
                                    <img class="company_image"
                                         src="{{ asset('img/Companies/'.$company->image) }}" alt="Company Image">
                                    <h5 class="card-title">{{ $company->name}}</h5>
                                    <tr>
                                        <td><i class="fa fa-check thirdcheck"></i> Third Party</td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td><i class="fa fa-times firstcheck"></i> Comprehensive</td>
                                    </tr>
                                    <br>
                                    <br>
                                    <button
                                        class="genric-btn success-border medium company-redirect" id="btn-send"
                                        data-toggle="modal" data-target="#breakdown-{{$company->id}}">
                                        रू <span class="ccPrem2">{{$ccAmt}}</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@foreach($companies as $company)
    <div class="modal fade"  id="breakdown-{{$company->id}}"" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Company Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                            <img class="company_image offset-1"
                                 src="{{ asset('img/Companies/'.$company->image) }}" alt="Company Image">
                            <h5 class="card-title">{{ $company->name}}</h5>
                            <h6>{{ $company->location }}</h6>
                            <h6>{{ $company->phone }}</h6>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                            <p>Premium Break Down</p>
                            <hr>
                            <h6 class="offset-3">{{ $data->brand_name }} {{ $data->type_name }} {{ $data->variant_name }}</h6>
                            <h6 class="offset-3 brkComp" style="display: none;">Sum Assured:
                                <input class="brkComp" type="text" id="idv" readonly
                                        style="border:0;width: 75px;display: none;" value="रू 50000"></h6>
                            <div class="row">
                                <div class="column">
                                    <h6 class="brkComp" style="display: none;">Comprehensive Premium</h6>
                                    <h6>Third Party Premium</h6>
                                    <h6 class="brkComp" style="display: none;">Riot/Strike/Terrorism Damage</h6>
                                    <h6 class="brkComp" style="display: none;">Excess Own Damage</h6>
                                    <h6 class="brkPax" style="display: none;">Pax Premium </h6>
                                    <h6>Total Premium</h6>
                                </div>
                                <div class="column">
                                    <h6 class="brkComp" style="display: none;">: NPR <span class="normalPrem">0</span></h6>
                                    <h6>: NPR <span>{{$ccAmt}}</span></h6>
                                    <h6 class="brkComp" style="display: none;">: NPR <span class="rsmt-brk">0</span></h6>
                                    <h6 class="brkComp" style="display: none;">: NPR <span class="eod-brk">0</span></h6>
                                    <h6 class="brkPax" style="display: none;">: NPR <span class="pax-prem">0</span></h6>
                                    <h6>: NPR <span class="ccPrem2">{{$ccAmt}}</span></h6>
                                </div>
                            </div>
                            <p>The Premium is subjected to 13% VAT.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div id="map" style="height: 400px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection

@section('js_content')
    <script type="text/javascript">
        var thirdPartyLiability = {!! json_encode($ccAmt) !!};                                                          //Storing Third Party Amount of the Vehicle.
        /*
        -------------------------------- Calulation of Vehicle AGE -----------------------------------
        */
        var dateOfPurchase = {!! json_encode($data->date) !!};
        var statusOfBike = {!! json_encode($data->status) !!};
        var yearOfPurchase = {!! json_encode($data->yearsBeforePurchase) !!};
        var currentYear = new Date();
        var date = currentYear.getFullYear();
        var ageOfBike;
        if (statusOfBike == 0) {
            ageOfBike = dateOfPurchase + yearOfPurchase - date;
        } else if (statusOfBike == 1) {
            ageOfBike = 0;
        }
        /*
        -------------------------------- Other Rates -----------------------------------
        */
        var rsmtDamageAllRate = 0.025 / 100;
        var rsmtVehicleDamageRate = 0.15 / 100;

        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 27.717245, lng: 85.323959},
                zoom: 14
            });
            var marker = new google.maps.Marker({
                position: {lat: 27.707798, lng: 85.318444},
                map:map
            })
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlONgy8QxbiKqd2ycO3bQq5EUv9Zj4JZU&callback=initMap"
            async defer></script>
@endsection

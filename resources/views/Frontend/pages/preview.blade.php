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
                    {{--<div style="width: 100px;margin-left: 45px;visibility: hidden" id="eoDiv">
                        <label for="eod">EOD: </label>
                        <select name="eod" id="eod">
                            <option value="0" selected>0</option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                            <option value="2000">2000</option>
                        </select>
                    </div>--}}
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
                        <input name="idv_name" type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
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
                    @foreach ($company as $company)
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
                                    <form action="{{ route('display-list',['id'=>$company->id]) }}" method="get">
                                        @csrf
                                        <button class="genric-btn success-border medium" type="submit" id="btn-send">रू <span class="ccPrem2">{{$ccAmt}}</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


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
        if ( statusOfBike == 0 ){
            ageOfBike = dateOfPurchase + yearOfPurchase - date;
        }
        else if(statusOfBike == 1){
            ageOfBike = 0;
        }
    /*
    -------------------------------- Fetch selected EOD value and compare -----------------------------------
    */
        var eod;
        var eodRate = 0;
        $('#eod').change(function(){
            eod = $(this).find(':selected').val();
            if( eod == 0){
                eodRate = 0;
            }
            else if(eod == 500){
                eodRate = 10;
            }
            else if(eod == 1000){
                eodRate = 10;
            }
            else if(eod >= 1000){
                eodRate = 20;
            }
        });
    /*
    -------------------------------- Other Rates -----------------------------------
    */
        var rsmtDamageAllRate = 0.025 / 100;
        var rsmtVehicleDamageRate = 0.15 / 100;
        var stampduty = 20;

    /*
    -------------------------------- Coverage Rate ----------------------------------
    */
        var driverCoverage = 500000;
        var passangerCoverage = 500000;
    </script>
@endsection

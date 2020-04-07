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
                    <input class=" basic-coverage" type="checkbox" onclick="return false" value=""
                           id="basic-coverage" checked>
                    <label for="basic-coverage">Third Party</label>
                </div>
                <div class="firstParty">
                    <input class="full_coverage" type="checkbox" name="comprehensive" id="full_coverage">
                    <label for="full_coverage">Comprehensive</label>
                </div>
                <br>
                <div class="firstpartyform" id="slider" style="display: none;">
                    <br>
                    <p>
                        <label for="idv_name">Sum Assured</label>
                        <input name="idv_name" type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    </p>
                </div>
                {{--<div id="RSMTD">
                    <input type="checkbox" name="RSMT" id="RSMT">
                    <label for="RSMT">Riot/ Strike/ Malicious/ Terrorism Damage</label>
                </div>--}}

            </div>

            <div class="col col-lg-10 col-md-9 col-sm-12">
                <div class="row">
                    @foreach ($company as $company)
                        <div class="col col-md-4 col-sm-6 col-xs-12" style="text-align: center; padding-bottom: 10px">
                            <div class="card">
                                <div class="card-body">
                                    <img class="" style="width: 75px; height: 75px;"
                                         src="{{ asset('img/Companies/'.$company->image) }}" alt="Card image cap">
                                    <h5 class="card-title">{{ $company->name}}</h5>
                                    <tr>
                                        <td><i class="fa fa-check thirdcheck"></i> Third Party</td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td><i class="fa fa-times firstcheck"></i> Comprehensive</td>
                                    </tr>
                                    <br><br>
                                    <button class="genric-btn success-border medium">{{'रू '.$ccAmt}}</button>
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


        var thirdPartyLiability = {!! json_encode($ccAmt) !!};
        var eodRate = 0;
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

        var ncdRate = 0;
        var rsmdRate = 0.1;
        var terroristRate = 0.05;

        var purchaseAge = 0;
    </script>
@endsection

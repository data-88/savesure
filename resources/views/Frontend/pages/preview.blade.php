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
                <div class="col-sm-2" style="text-align: center; margin-top: 25px">
                    <h6>Bike Insurance</h6>
                </div>
                <div class="col-md-8">
                    <h6>Bike Brand: {{ $data->brand_name }}</h6>
                    <h6>Bike Model: {{ $data->type_name }}</h6>
                    <h6>Bike Variant: {{ $data->variant_name }} </h6>
                </div>
                <div class="col-md-2">
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
                    <input type="checkbox" name="thirdparty" id="thirdparty" checked>
                    <label for="thirdparty">Third Party</label>

                    <input type="checkbox" name="comprehensive" id="comprehensive">
                    <label for="comprehensive">Comprehensive</label>
                </div>
                <div id="slider"></div>
                <br>
                <p>
                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                </p>
            </div>
            {{--{{ dd($company) }}--}}

            <div class="col col-lg-10 col-md-9 col-sm-12">
                <div class="row">
                    @foreach ($company as $company)
                        <div class="col col-md-4 col-sm-6 col-xs-12" style="text-align: center">
                            <div class="card">
                                <div class="card-body">
                                    <img class="" style="width: 75px; height: 75px;"
                                         src="{{ asset('img/Companies/'.$company->image) }}" alt="Card image cap">
                                    <h5 class="card-title">{{ $company->name}}</h5>
                                    <p class="card-text" id="policy_type">Third Party</p>
                                    <p></p>
                                    <button class="genric-btn success-border medium"
                                            type="submit">{{'RS.'.$ccAmt}}</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

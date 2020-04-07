@extends('Frontend.master')

@section('content')
    {{--    Form section for bike insurance that collects the vehicle details of user--}}
    {{--<div class="container">
        <form class="form-style-9">
            <h2>Vehicle Detail</h2>
            <ul>
                <div>
                    <li>
                        <input type="text" name="fname" class="field-style field-split align-left" placeholder="First Name"
                            required />
                        <input type="text" name="lname" class="field-style field-split align-right" placeholder="Last Name"
                            required />
                    </li>
                    <li>
                        <input type="text" name="phone" class="field-style field-split align-left" placeholder="Phone" />
                        <input type="email" name="email" class="field-style field-split align-right" placeholder="Email" />
                    </li>
                </div>
                <div>
                    <li>
                        <select name="brand" id="brand" class="field-style field-split align-left" required>
                            <option value="" disabled="true" selected="true">Select Brand</option>
                            --}}{{--Loop through brand table to display brand names--}}{{--
                            @foreach($brands as  $key => $value)
                                <option value="{{ $key }}">{{$value}}</option>
                            @endforeach
                        </select>

                        <select name="type" id="type" class="field-style field-split align-right" required>
                            <option value="0" disabled="true" selected="true">Select Model</option>
                        </select>
                    </li>
                </div>

                <div>
                    <li>
                        <select name="variant" id="variant" class="field-style field-split align-left" required>
                            <option value="">Select Variant</option>
                        </select>

                        <select name="date" class="field-style field-split align-right" required>
                            <option value="">Year Of Purchase</option>
                            @for($year=1967; $year<=date('Y'); $year++){ ?>
                            <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                        </select>
                    </li>
                </div>

                <div>
                    <li>
                        <p>This Vehicle is?</p>
                        <input type="radio" name="status" value='old' checked> Old
                        <input type="radio" name="status" value='new'> Brand New
                    </li>
                </div>
                <div class="col-xs-4">
                    <li>
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Continue</button>
                    </li>
                </div>
            </ul>
        </form>
    </div>--}}
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Vehicle Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <!-- apply_form_area -->
    <div class="apply_form_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="/create" class="apply_form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="apply_info_text text-center">
                                    <h3>Enter Your Vehicle Details</h3>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_field">
                                    <input type="text" name="name" id="name" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_field">
                                    <input type="email" name="email" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_field">
                                    <input type="number" name="phone" id="phone" placeholder="Phone no.">
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom:13px">
                                <div>
                                    <select name="brand" id="brand" class=" form-control">
                                        <option value="" disabled="true" selected="true">Select Brand</option>
                                        @foreach($brands as  $key => $value)
                                            <option value="{{ $key }}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <select name="type" id="type" class="wide form-control">
                                        <option value="0" disabled="true" selected="true">Select Model</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom:13px">
                                <div>
                                    <select name="variant" id="variant" class="wide form-control">
                                        <option value="">Select Variant</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <select name="date" class="wide form-control">
                                        <option value="">Year Of Purchase</option>
                                        @for($year=2010; $year<=date('Y'); $year++){ ?>
                                        <option value="{{ $year }}">{{ $year }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id="oldNew" aria-required="true">
                                    <li>
                                        <h6>This Vehicle is?</h6>
                                        <input type="radio" name="status" value='0'> Old
                                        <input type="radio" name="status" value='1'> Brand New
                                    </li>
                                </div>
                                <div class="oldYear" style="display: none;">
                                    <h6>How old was the vehicle the time of purchase:</h6>
                                        <select id="yearsBeforePurchase" class="form-control" name="yearsBeforePurchase">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="submit_btn">
                                    <button class="boxed-btn3" type="submit">Continue</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ apply_form_area -->

@endsection

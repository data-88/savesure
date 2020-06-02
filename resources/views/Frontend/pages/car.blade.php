@extends('Frontend.master')

@section('content')
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
                <div class="col-lg-6">
                    <form action="/create" class="apply_form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="apply_info_text text-center">
                                    <h3>Enter Your Vehicle Details</h3>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Your name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2"><input type="text" class="form-control" value="+977" disabled style="width: 60px;"></div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{  old('phone') }}" placeholder="Phone no.">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom:13px">
                                <div>
                                    <select name="brand" id="brand" class="form-control @error('brand') is-invalid @enderror" >
                                        <option value="" disabled="true" selected="true">Select Brand</option>
                                        @foreach($brands as  $key => $value)
                                            <option value="{{ $key }}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                    @error('brand')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <select name="type" id="type" class="wide form-control @error('type') is-invalid @enderror" >
                                        <option value="0" disabled="true" selected="true">Select Model</option>
                                    </select>
                                    @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom:13px">
                                <div>
                                    <select name="variant" id="variant" class="wide form-control @error('variant') is-invalid @enderror" >
                                        <option value="">Select Variant</option>
                                    </select>
                                    @error('variant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <select name="date" class="wide form-control @error('date') is-invalid @enderror">
                                        <option value="">Year Of Purchase</option>
                                        @for($year=2010; $year<=date('Y'); $year++){ ?>
                                        <option value="{{ $year }}">{{ $year }}</option>
                                        @endfor
                                    </select>
                                    @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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


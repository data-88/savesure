@extends('Backend.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Car Variant</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('car-variant')}}">Models</a></li>
                        <li class="breadcrumb-item active">Add Brands</li>
                    </ol>
                </div>
                @if(session()->has('success'))
                    <div class="alert alert-success text-center displayMessage" style="margin-top: 10px">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger text-center displayMessage" style="margin-top: 10px">
                        {{ session()->get('error') }}
                    </div>
                @endif
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{route('update-car-variant',['id'=>$variant->id])}}" method="post">
                    {{csrf_field()}}
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Car Variant Description</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <label for="carBrand">Brand</label>
                                <select name="carBrand" id="carBrand" class="form-control @error('carBrand') is-invalid @enderror">
                                    <option value="" selected="true">Select Brand</option>
                                    @foreach($brands as  $key => $value)
                                        <option value="{{ $key }}">{{$value}}</option>
                                    @endforeach
                                </select>
                                @error('carBrand')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div>
                                <label for="carModel">Model</label>
                                <select name="carModel" id="carModel" class="form-control @error('carModel') is-invalid @enderror">
                                    <option value="0" selected="true" disabled>Select Model</option>
                                </select>
                                @error('carModel')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Variant Name</label>
                                <input type="text" name="name" id="inputName" class="form-control @error('name') is-invalid @enderror" value="{{$variant->name}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Variant CC</label>
                                <input type="text" name="cc" id="inputCC" class="form-control @error('cc') is-invalid @enderror" value="{{$variant->vehicle_cc}}">
                                @error('cc')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <a href="{{route('car-variant')}}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Save Changes" class="btn btn-success">
                </form>
            </div>
        </div>
    </section>
@endsection

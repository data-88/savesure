@extends('Backend.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Bike Model</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('variant')}}">Models</a></li>
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
                <form action="{{route('update-variant',['id'=>$variant->id])}}" method="post">
                    {{csrf_field()}}
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Bike Model Description</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <label for="bikeBrand">Brand</label>
                                <select name="bikeBrand" id="bikeBrand" class="form-control">
                                    <option value="" selected="true">Select Brand</option>
                                    @foreach($brands as  $key => $value)
                                        <option value="{{ $key }}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="bikeModel">Model</label>
                                <select name="bikeModel" id="bikeModel" class="form-control">
                                    <option value="0" selected="true" disabled>Select Model</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Variant Name</label>
                                <input type="text" name="name" id="inputName" class="form-control" value="{{$variant->name}}">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Variant CC</label>
                                <input type="number" name="cc" id="inputCC" class="form-control" value="{{$variant->vehicle_cc}}">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <a href="{{route('variant')}}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Save Changes" class="btn btn-success">
                </form>
            </div>
        </div>
    </section>
@endsection

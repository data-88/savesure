@extends('Backend.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Premium</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('premium')}}">Premium</a></li>
                        <li class="breadcrumb-item active">Add Premium</li>
                    </ol>
                </div>
                <div class="col col-md-12">
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
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{route('store-premium')}}" method="post">
                    {{csrf_field()}}
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Premium Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="minCC">Min CC</label>
                                <input type="text" name="min" id="minCC" class="form-control" placeholder="0">
                            </div>
                            <div class="form-group">
                                <label for="maxCC">Max CC</label>
                                <input type="text" name="max" id="maxCC" class="form-control" placeholder="150">
                            </div>
                            <div class="form-group">
                                <label for="amt">Amount</label>
                                <input type="text" name="amt" id="amt" class="form-control" placeholder="1500">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <a href="{{route('premium')}}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Save Changes" class="btn btn-success">
                </form>
            </div>
        </div>
    </section>
@endsection

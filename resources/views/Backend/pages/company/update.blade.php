@extends('Backend.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Insurance Company Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('company')}}">Company</a></li>
                        <li class="breadcrumb-item active">Edit Company</li>
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
                <form action="{{route('update-company',['id'=>$company->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General Company Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Company Name</label>
                                <input type="text" name="name" id="inputName" class="form-control" value="{{$company->name}}">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Company Location</label>
                                <input type="text" name="loc" id="inputLoc" class="form-control" value="{{$company->location}}">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Company Phone</label>
                                <input type="text" name="phn" id="inputPhn" class="form-control" value="{{$company->phone}}">
                            </div>
                            <div class="form-group">
                                <label for=""> Company Logo <span class="text-danger">*</span></label>
                                <input type="file" name="imgLogo" id="img"><br>
                                <img src="{{ URL::to('img/Companies/'.$company->image)}}" width="100" alt="{{$company->name}}">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <a href="{{route('company')}}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Save Changes" class="btn btn-success">
                </form>
            </div>
        </div>
    </section>
@endsection

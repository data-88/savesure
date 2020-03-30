@extends('Backend.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Brands</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('car-brands')}}">Brands</a></li>
                        <li class="breadcrumb-item active">Edit Brands</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row justify-content-center">
            {{--@if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all()as $error)
                        <li>{{ $error  }}</li>
                    @endforeach
                </div>
            @endif--}}
            <div class="col-md-6">
                <form action="{{route('update-car-brands',['id'=>$brands->id])}}" method="post">
                    @csrf
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Car Brand Name</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Brand Name</label>
                                <input type="text" name="name" id="inputName" class="form-control"
                                       value="{{$brands->name}}">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <a href="{{route('car-brands')}}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Save Changes" class="btn btn-success">
                </form>

            </div>
        </div>
    </section>
@endsection

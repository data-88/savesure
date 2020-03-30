@extends('Backend.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Model</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('car-model')}}">Brands</a></li>
                        <li class="breadcrumb-item active">Edit Model</li>
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
                <form action="{{route('update-car-model',['id'=>$model->id])}}" method="post">
                    @csrf
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Bike Model Detail</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Model Name</label>
                                <input type="text" name="name" id="inputName" class="form-control"
                                       value="{{$model->name}}">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <a href="{{route('car-model')}}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Save Changes" class="btn btn-success">
                </form>

            </div>
        </div>
    </section>
@endsection

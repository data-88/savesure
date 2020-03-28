@extends('Backend.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update About</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('about')}}">About</a></li>
                        <li class="breadcrumb-item active">Update About</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{route('update-about', ['id'=>$abouts->id])}}" method="post">
                    {{csrf_field()}}
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="txtmain" maxlength="500" id="editor2"
                                              class="form-control">{{ $abouts->main_text }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-line">
                                     <textarea name="txtdesc" id="editor1"
                                               class="textarea">{{ $abouts->about_text }}</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <input type="submit" value="Update" class="btn btn-success">
                </form>
            </div>
        </div>
    </section>
@endsection
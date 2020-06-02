@extends('Backend.master')

@section('content')
    @if(session()->has('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" name="button" class="close" data-dismiss="alert">x</button>
            <strong>{{session()->get('error')}}</strong>
        </div>
    @elseif(session()->has('message'))
        <div class="alert alert-success alert-block">
            <button type="button" name="button" class="close" data-dismiss="alert">x</button>
            <strong>{{session()->get('message')}}</strong>
        </div>
    @endif
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="../../dist/img/{{$user->avatar}}"
                                     alt="User profile picture">
                                <form enctype="multipart/form-data" action="{{route('update-avatar')}}" method="post">
                                    @csrf
                                    <label>Update Image</label>
                                    <input type="file" name="avatar">
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </form>
                            </div>
                            <h3 class="profile-username text-center">{{$user->name}}</h3>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#details" data-toggle="tab">Details</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#change_email" data-toggle="tab">Change
                                        Email</a></li>
                                <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Change
                                        Password</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                {{--Details--}}
                                <div class="active tab-pane" id="details">
                                    <div class="row"></div>
                                    {{--Name--}}
                                    <div class="input-group mb-3">
                                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                                        {{$user -> name}}
                                    </div>
                                    {{--Email--}}
                                    <div class="input-group mb-3">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        {{$user -> email}}

                                    </div>
                                    {{--Password--}}
                                    <div class="input-group mb-3">
                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                        ***********
                                    </div>
                                </div>
                                {{--Change Email--}}
                                <div class="tab-pane" id="change_email">
                                    <div class="row">

                                    </div>
                                </div>
                                {{--Change Password--}}
                                <div class="tab-pane" id="change_password">
                                    <form action="{{route('update-password')}}" class="form-horizontal" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="input-group mb-3">
                                                <label for="currentPassword" class="col-sm-2 col-form-label">Current
                                                    Password</label>
                                                <input type="password" class="form-control col-sm-2"
                                                       id="currentPassword"
                                                       placeholder="Current Password">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="input-group mb-3">
                                                <label for="newPassword" class="col-sm-2 col-form-label">New
                                                    Password</label>
                                                <input type="password" class="form-control col-sm-2" id="newPassword"
                                                       placeholder="New Password">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="input-group mb-3">
                                                <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm
                                                    Password</label>
                                                <input type="password" class="form-control col-sm-2"
                                                       id="confirmPassword" placeholder="Confirm Password">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-2 offset-2">
                                                <button type="submit" class="btn btn-primary btn-block">Change
                                                    password
                                                </button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('js_section')

@endsection


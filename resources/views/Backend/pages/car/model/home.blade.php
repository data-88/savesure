@extends("Backend.master")

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Car Models</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Model</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Car Model</h3>
                <div class="card-tools">
                    <a class="btn btn-block btn-primary" href="{{ route('add-car-model') }}">Add Model</a>
                </div>
                <br><br>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                {{--<div class="col col-md-2">
                    <select name="bikeBrand" id="brand" class="form-control">
                        <option value="" selected="true" disabled>Select Brand</option>
                        @foreach($brands as  $key => $value)
                            <option value="{{ $key }}">{{$value}}</option>
                        @endforeach
                    </select>

                </div>--}}
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 2%">#</th>
                        <th>Model Name</th>
                        <th>Brand Name</th>
                        <th style="width: 15%; text-align: center" colspan="2"> Action</th>
                    </tr>
                    </thead>
                    <tbody id="brand_data">
                        @foreach($data as $key => $valTypes)
                            <tr>
                            <td>{{++$key}}</td>
                            <td>
                                <a>{{$valTypes->name}}</a>
                            </td>
                            <td>
                                <a>{{$valTypes->brand_name}}</a>
                            </td>
                            <td class="project-actions text-right">

                                <a class="btn btn-info btn-sm" href="{{route('edit-car-model',['id'=>$valTypes->id])}}">
                                    <i class="fas fa-pencil-alt"></i>
                                    Edit
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('delete-car-model',['id'=>$valTypes->id]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"> </i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>

@endsection

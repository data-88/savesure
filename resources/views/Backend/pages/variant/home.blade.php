@extends("Backend.master")

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bike Variants</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Variants</li>
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
                <h3 class="card-title">Variants</h3>
                <div class="card-tools">
                    <a class="btn btn-block btn-primary" href="{{--{{ route('add-variant') }}--}}">Add Model</a>
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
                        <th>Brand Name</th>
                        <th>Model Name</th>
                        <th>Variant Name</th>
                        <th style="width: 15%; text-align: center" colspan="2"> Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key => $valVariants)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>
                                <a>{{$valVariants->brand_name}}</a>
                            </td>
                            <td>
                                <a>{{$valVariants->model_name}}</a>
                            </td>
                            <td>
                                <a>{{$valVariants->name}}</a>
                            </td>
                            <td class="project-actions text-right">

                                <a class="btn btn-info btn-sm" href="{{--{{route('edit-model',['id'=>$valVariants->id])}}--}}">
                                    <i class="fas fa-pencil-alt"></i>
                                    Edit
                                </a>
                            </td>
                            <td>
                                <form action="{{--{{ route('delete-model',['id'=>$valVariants->id]) }}--}}" method="post">
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

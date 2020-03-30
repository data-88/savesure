@extends("Backend.master")

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Insurance Companies</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Companies</li>
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
                <h3 class="card-title">Non-Life Insurance Companies</h3>
                <div class="card-tools">
                    <a class="btn btn-block btn-primary" href="{{ route('add-company') }}">Add Company</a>
                </div>
                <br><br>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 2%">#</th>
                        <th>Company Name</th>
                        <th>Image</th>
                        <th>Phone</th>
                        <th>Location</th>
                        <th style="width: 13%; text-align: center" colspan="2"> Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($company as $key => $valCompany)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>
                                <a>{{$valCompany->name}}</a>
                            </td>
                            <td><img style="width: 75px; height: 75px;" src="{{ asset('img/Companies/'.$valCompany->image) }}" alt=""></td>
                            <td>{{$valCompany->phone}}</td>
                            <td>{{$valCompany->location}}</td>
                            <td class="project-actions text-right">

                                <a class="btn btn-info btn-sm" href="{{route('update-company',['id'=>$valCompany->id])}}">
                                    <i class="fas fa-pencil-alt"></i>
                                    Edit
                                </a>
                            </td>
                            <td>
                               {{-- <form action="{{ route('delete-company',['id'=>$valCompany->id]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"> </i>
                                        Delete
                                    </button>
                                </form>--}}
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#deleteModal">
                                    <i class="fas fa-trash"></i>
                                    Delete
                                </button>
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

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                </div>
                <form action="{{ route('delete-company',['id'=>$valCompany->id]) }}" method="post">
                    @csrf
                    <div class="modal-body">
                        Are you sure you want to delete this Company?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

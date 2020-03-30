@extends("Backend.master")

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>About</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">About</li>
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
                <!-- php to add about details if there is no any about details in the database -->
                <?php
                if(count($abouts) <= 0){ ?>
                <a href="{{ route('add-about') }}" class="btn btn-success text-uppercase">add about</a>
                <?php } ?>
                <br><br>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th width="30%">Home Content</th>
                        <th>Main Content</th>
                        <th style="width: 13%; text-align: center" colspan="2"> Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($abouts as $keys => $about)
                    <tr>
                        <td>{{ $about->main_text }}</td>
                        <td>{!!  $about->about_text !!}</td>
                        <td class="project-actions text-right">

                            <a class="btn btn-info btn-sm" href="{{route('edit-about',['id'=>$about->id])}}">
                                <i class="fas fa-pencil-alt"></i>
                                Edit
                            </a>
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

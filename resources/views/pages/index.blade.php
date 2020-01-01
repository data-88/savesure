@extends('layouts.app')

@section('content')
<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a
                jumbotron and three supporting pieces of content. Use it as a starting point to create something more
                unique.</p>
            <p><a class="btn btn-primary btn-lg" href="/about" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Row of columns -->
        <div class="row">
            <div class="col-md-4">
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Bike</h2>
                <p><a class="btn btn-secondary" href="/twowheeler" role="button">Get Quotes &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Car</h2>
                <p><a class="btn btn-secondary" href="#" role="button">Get Quotes &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Commercial Vehicle</h2>
                <p><a class="btn btn-secondary" href="#" role="button">Get Quotes &raquo;</a></p>
            </div>
        </div>

        <hr>

    </div> <!-- /container -->

</main>
@endsection
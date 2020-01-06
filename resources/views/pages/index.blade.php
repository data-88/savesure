@extends('layouts.app')

@section('content')
<main role="main">

    <div class="container">
        <!-- Row of columns -->
        <div class="row" style="padding-top:20px;">
            <div class="col-md-4">
                <img src="{{ asset('img/bike.png') }}" alt="Generic placeholder image"
                    width="140" height="140">
                <h2>Bike</h2>
                <p><a class="btn btn-secondary" href="/twowheeler" role="button">Get Quotes &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/car.png') }}" alt="Generic placeholder image" width="140"
                    height="140">
                <h2>Car</h2>
                <p><a class="btn btn-secondary" href="#" role="button">Get Quotes &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <img  src="{{ asset('img/bus.png') }}" alt="Generic placeholder image" width="140"
                    height="140">
                <h2>Commercial Vehicle</h2>
                <p><a class="btn btn-secondary" href="#" role="button">Get Quotes &raquo;</a></p>
            </div>
        </div>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron" style="background-color:white;">
            <hr>
            <div class="container">
                <h1 class="display-3" style="text-align: center;">Why choose us!</h1>
                <div class="row">
                    <div class="col-md-4">
                        <h2>Save Time!</h2>
                        <p>Save your valuable time by quickly comparing quotes with out the hassle of dealing with
                            agents.</p>
                    </div>

                    <div class="col-md-4">
                        <h2>Best Prices!</h2>
                        <p>Our Comparision tool provides total transparency and lists the best price.</p>
                    </div>

                    <div class="col-md-4">
                        <h2>Quick and Easy!</h2>
                        <p>With our user friendly interface it is quick and easy to find the right policy for your
                            automobile.</p>
                    </div>
                </div>
                <!-- <p><a class="btn btn-primary btn-lg" href="/about" role="button">Learn more &raquo;</a></p> -->
            </div>
        </div>
        <hr>
    </div> <!-- /container -->

</main>
@endsection
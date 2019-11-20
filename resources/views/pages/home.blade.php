@extends('layouts.default')
@section('content')
    <h3>Homapge Content</h3>

    <div class="row cards-container">
            <div class="card col-sm-6 col-lg-4" style="width:400px">
                <img class="card-img-top" src="{{ asset('img/eevee.png') }}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>

            <div class="card col-sm-6 col-lg-4" style="width:400px">
                <img class="card-img-top" src="{{ asset('img/eevee.png') }}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>

            <div class="card col-sm-6 col-lg-4" style="width:400px">
                <img class="card-img-top" src="{{ asset('img/eevee.png') }}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>

            <div class="card col-sm-6 col-lg-4" style="width:400px">
                <img class="card-img-top" src="{{ asset('img/eevee.png') }}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
    </div>
@stop

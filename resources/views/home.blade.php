@extends('partials.nav')

@extends('layouts.index')

@section('title', 'Utalii')

@section('content')
<div class="container">
  <div class="jumbotron">
    <h1 class="display-4">Discover Your Next Adventure</h1>
    <p class="lead">Explore the world with our curated selection of tours and activities.</p>
    <hr class="my-4">
    <p>Book your next adventure today and experience the trip of a lifetime.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Browse Tours</a>
  </div>

  <div class="row">
    <div class="col-md-4">
      <h2>Tour Packages</h2>
      <p>Choose from our selection of pre-made tour packages or customize your own itinerary.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View Details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Activities</h2>
      <p>Experience the best of your destination with our selection of activities, from hiking to sightseeing.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View Details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Transportation</h2>
      <p>Get to your destination hassle-free with our transportation services, including airport transfers and rental cars.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View Details &raquo;</a></p>
    </div>
  </div>

  <hr>

  <h3>Featured Destinations</h3>
  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="https://picsum.photos/300/200?random=1" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Paris, France</h5>
        <p class="card-text">Experience the romance and culture of the City of Love with our guided tours and activities.</p>
        <a href="#" class="btn btn-primary">Explore Paris</a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://picsum.photos/300/200?random=2" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Sydney, Australia</h5>
        <p class="card-text">Discover the stunning beaches and landmarks of Sydney with our sightseeing tours and activities.</p>
        <a href="#" class="btn btn-primary">Explore Sydney</a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://picsum.photos/300/200?random=3" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Tokyo, Japan</h5>
        <p class="card-text">Immerse yourself in the unique culture and cuisine of Tokyo with our food tours and activities.</p>
        <a href="#" class="btn btn-primary">Explore Tokyo</a>
      </div>
    </div>
  </div>

</div>
@endsection

{{-- @extends('partials.footer') --}}

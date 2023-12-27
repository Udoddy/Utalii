@extends('layouts.master')
@section('page_title', 'Favorites')
@section('content')

<div class="card">
    <div class="card-header">
        <h6 class="card-title">My Favorites</h6>
    </div>
    <div class="card-body">
        @if(count($userFavorites) > 0)
            <div class="row">
                @foreach($userFavorites as $favorite)
                    <!-- Display each favorite place/site -->
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <img src="{{ asset('global_assets/images/Places/' . $favorite->place->image) }}" alt="Image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $favorite->place->name }}</h5>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($favorite->place->description, 100, ' ...') }}</p>
                                <button type="button" class="btn btn-primary" onclick="removeFromFavorites({{ $favorite->id }})">Remove</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No favorites found.</p>
        @endif
    </div>
</div>

@endsection

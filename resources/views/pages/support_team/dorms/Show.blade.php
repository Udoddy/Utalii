@extends('layouts.master')
@section('page_title', 'Places')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .modal-dialog {
        max-width: 800px;
    }

    .modal-body {
        padding: 20px;
    }

    .modal-body img {
        width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    .card-text {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
</style>

<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">Review Places</h6>
        {!! Qs::getPanelOptions() !!}
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <form action="{{ url()->current() }}" method="GET" class="form-inline justify-content-end mb-3">
                            <div class="input-group w-100">
                                <input type="text" name="filter" class="form-control" placeholder="Type to Filter" value="{{ request()->input('filter') }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @foreach($dorms as $d)
                        @if(request()->has('filter') && !str_contains(strtolower($d->name), strtolower(request()->input('filter'))) && !str_contains(strtolower($d->category->name), strtolower(request()->input('filter'))))
                            @continue
                        @endif
                        <!-- Modal for Place Details -->
                        <div class="modal" id="modal{{ $d->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ $d->name }}</h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('global_assets/images/Places/' . $d->image) }}" alt="Image">
                                        <p><strong>Description: </strong>{{ $d->description }}</p>
                                        <p><strong>Category: </strong>{{ $d->category->name }}</p>
                                        <p><strong>Opening Hours: </strong>{{ $d->opening_hours }}</p>
                                        <p><strong>Ratings: </strong>{{ $d->rating }}</p>
                                        <p><strong>Activities: </strong>{{ $d->activities }}</p>
                                        <p><strong>Entrance Fee: </strong>{{ $d->entrance_fee }}</p>
                                        <p><strong>Phone Number: </strong>{{ $d->phone_number }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger" onclick="addToFavorites({{ $d->id }})">
                                            <i class="fas fa-heart"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Card for Place -->
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="{{ asset('global_assets/images/Places/' . $d->image) }}" alt="Image" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $d->name }}</h5>
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit($d->description, 100, ' ...') }}</p>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{ $d->id }}">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="pagination">
                            @if ($dorms->onFirstPage())
                                <li class="page-item disabled"><span class="page-link">Previous</span></li>
                            @else
                                <li class="page-item"><a href="{{ $dorms->previousPageUrl() }}" class="page-link">Previous</a></li>
                            @endif

                            @if ($dorms->hasMorePages())
                                <li class="page-item"><a href="{{ $dorms->nextPageUrl() }}" class="page-link">Next</a></li>
                            @else
                                <li class="page-item disabled"><span class="page-link">Next</span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--Places List Ends--}}

<script>
    function addToFavorites(placeId) {
        // Send an AJAX request to add the place to favorites
        $.ajax({
            url: '/favorites/add',
            type: 'POST',
            data: {
                place_id: placeId
            },
            success: function (response) {
                if (response.success) {
                    alert('Place added to favorites!');
                } else {
                    alert('Failed to add place to favorites. Please try again.');
                }
            },
            error: function () {
                alert('An error occurred. Please try again later.');
            }
        });
    }
</script>


@endsection

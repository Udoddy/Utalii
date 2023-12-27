@extends('layouts.master')
@section('page_title', 'Reviews')
@section('content')


@section('content')
    <div class="container">
        <h1>Add Review</h1>

        <form method="POST" action="{{ route('site-reviews.store') }}">
            @csrf

            <!-- Add form fields for place selection, comment, review, etc. -->
            <div class="form-group">
                <label for="place">Select Place:</label>
                <select name="place_id" id="place" class="form-control">
                    @foreach($places as $place)
                        <option value="{{ $place->id }}">{{ $place->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea name="comment" id="comment" class="form-control" placeholder="Leave a comment"></textarea>
            </div>

            <div class="form-group">
                <label for="review">Review:</label>
                <input type="number" name="review" id="review" class="form-control" placeholder="Give a review" step="0.1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

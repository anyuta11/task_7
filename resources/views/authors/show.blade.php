@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>About Author</h1>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $author->first_name }} {{ $author->last_name }}</h2>
                <p class="card-text"><strong>Biography:</strong></p>
                <p class="card-text">{{ $author->biography }}</p>
            </div>
        </div>

        <a href="{{ route('authors.index') }}" class="btn btn-secondary mt-3">Back to Authors List</a>
@endsection


@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">About Book </h1>
        <div class="card">
            <div class="card-header">
                <h4>{{ $book->title }}</h4>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Author:</dt>
                    @foreach($book->authors as $author)
                        <dd class="col-sm-9">{{ $author->first_name }} {{ $author->last_name }}</dd>
                    @endforeach

                    <dt class="col-sm-3">Publication Date:</dt>
                    <dd class="col-sm-9">{{ $book->publication_year }}</dd>

                    <dt class="col-sm-3">Description</dt>
                    <dd class="col-sm-9">{{ $book->description }}</dd>
                </dl>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection

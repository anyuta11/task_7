@extends('layouts.app')

@section('title', 'Add New Book')

@section('content')
    <div class="container">
        <h1 class="my-4">Add New Book</h1>
        <form action="{{route('books.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="publication_year" class="form-label">Publication Year</label>
                <input type="number" name="publication_year" id="publication_year" min="1900" max="{{ date('Y') }}"
                       required>
            </div>

            <div class="mb-3">
                <label>Authors</label>
                <div class="scrollable-checkbox-container">
                    @foreach ($authors as $author)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="author{{ $author->id }}"
                                   name="authors[]" value="{{ $author->id }}">
                            <label class="form-check-label" for="author{{ $author->id }}">
                                {{ $author->first_name }} {{ $author->last_name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add Book</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection



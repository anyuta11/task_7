@extends('layouts.app')

@section('title', 'Edit Book')

@section('content')
    <div class="container">
        <h1>Edit Book</h1>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $book->title) }}"
                       required>
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control"
                          rows="5">{{ old('description', $book->description) }}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <div class="scrollable-checkbox-container">
                    @foreach($allAuthors as $author)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="author{{ $author->id }}"
                                   name="authors[]"
                                   value="{{ $author->id }}" {{ $book->authors->contains($author) ? 'checked' : '' }}>
                            <label class="form-check-label" for="author{{ $author->id }}">
                                {{ $author->first_name }} {{ $author->last_name }}
                            </label>
                        </div>
                    @endforeach
                </div>
                @error('author')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="publication_year" class="form-label">Publication Year</label>
                <input type="number" class="form-control" id="publication_year" name="publication_year"
                       value="{{ old('publication_year', $book->publication_year) }}" min="1900" max="{{ date('Y') }}"
                       required>
                @error('publication_year')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Book</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

@extends('admin.layout')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Edit Author</h1>
        <form action="{{ route('author.update', $author->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" class="form-control"
                       value="{{ $author->first_name }}" required>
            </div>
            <div class="mb-3">
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $author->last_name }}"
                       required>
            </div>
            <div class="mb-3">
                <label for="biography">Biography:</label>
                <textarea name="biography" id="biography" class="form-control" rows="4"
                          required>{{ $author->biography }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('author.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

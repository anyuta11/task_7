@extends('admin.layout')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Authors</h1>
        <a href="{{ route('author.create') }}" class="btn btn-primary mb-3">Add New Author</a>
        <div class="list-group">
            @foreach ($authors as $author)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $author->first_name }} {{ $author->last_name }}
                    <div class="btn-group" role="group">
                        <a href="{{ route('author.edit', $author->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('author.destroy', $author->id) }}" method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        <a href="{{ route('author.show', $author->id) }}" class="btn btn-success btn-sm">Show
                            Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

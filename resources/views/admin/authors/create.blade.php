@extends('admin.layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Add New Author</h1>
        <form action="{{ route('author.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="biography">Biography:</label>
                <textarea name="biography" id="biography" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('author.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

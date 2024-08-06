@extends('layouts.app')

@section('title','Home')

@section('content')
    <div class="container text-center mt-5">
        <h1 class="mb-4">Welcome to My Library</h1>
        <p class="lead mb-4">Explore our collection of books and authors.</p>
        <div class="d-grid gap-2 d-md-block">
            <a href="{{ route('books.index') }}" class="btn btn-primary btn-custom">Books</a>
            <a href="{{ route('authors.index') }}" class="btn btn-secondary btn-custom">Authors</a>
        </div>
    </div>
@endsection


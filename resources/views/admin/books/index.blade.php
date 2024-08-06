@extends('admin.layout')

@section('content')
    <div class="container">
        <h1>Books</h1>
        <a href="{{ route('book.create') }}" class="btn btn-primary">Add Book</a>
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Publication Year</th>
                <th>Authors</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->publication_year }}</td>
                    <td>
                        @foreach($book->authors as $author)
                            {{ $author->first_name }} {{ $author->last_name }}
                        @endforeach
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{route('book.edit',$book->id)}}">Edit</a>
                        <form action="{{route('book.destroy', $book->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a class="btn btn-success" href="{{route('book.show',$book->id)}}">Show</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

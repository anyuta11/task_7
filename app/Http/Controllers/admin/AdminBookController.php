<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;

class AdminBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with('authors')->get();

        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();

        return view('admin.books.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $book = new Book();
        $book->fill($request->validated());
        $book->save();
        $book->authors()->sync($request->authors);

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findorFail($id);

        return view('admin.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::with('authors')->findorFail($id);
        $allAuthors = Author::all();

        return view('admin.books.edit', compact('book', 'allAuthors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, string $id)
    {
        $book = Book::findorFail($id);
        $book->update($request->validated());

        $book->authors()->sync($request->authors);

        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findorFail($id);
        $book->delete();

        return redirect()->route('book.index');
    }
}

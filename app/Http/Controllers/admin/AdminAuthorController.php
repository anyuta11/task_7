<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorRequest;
use App\Models\Author;

class AdminAuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return view('admin.authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorRequest $request)
    {
        $author = new Author();
        $author->fill($request->validated());
        $author->save();

        return redirect()->route('author.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $author = Author::findorFail($id);

        return view('admin.authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::findorFail($id);

        return view('admin.authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorRequest $request, string $id)
    {
        $author = Author::findorFail($id);
        $author->update($request->validated());

        return redirect()->route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Author::findorFail($id)->delete();

        return redirect()->route('author.index');
    }
}

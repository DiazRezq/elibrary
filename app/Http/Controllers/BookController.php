<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;

class BookController extends Controller
{
    // display a listing of the books

    public function index()
    {
        $books = Book::with('category', 'publisher')->get();
        return view('pages.books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::all();
        $publishers = Publisher::all();

        return view('pages.books.create', compact('categories', 'publishers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            'publisher_id' => 'required',
            'cover_image' => 'required |integer',
            'synopsysis' => 'required',
            'stock' => 'required|numeric',
            'rental_price' => 'required|numeric',
        ]);
        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Book created successfully');
    }

    public function edit(Book $book)
    {
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('pages.books.edit', compact('book', 'categories', 'publishers'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            'publisher_id' => 'required',
            'cover_image' => 'required |integer',
            'synopsysis' => 'required',
            'stock' => 'required|numeric',
            'rental_price' => 'required|numeric',
        ]);
        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    public function show(Book $book)
    {
        return view('pages.books.show', compact('book'));
    }



    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}

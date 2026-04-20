<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books =  books::all(); 

        return view("books.index", [
            'items' => $books
        ]);
    }

    public function store(Request $request)
    {
        books::create([
            'book_name' => $request->book_name,
            'book_author' => $request->book_author,
            'book_stock' => $request->book_stock,
            'book_date' => $request->book_date
        ]);

        return redirect('/books');
    }

    public function edit($id) {
        $book = books::findOrFail($id);

        return view('books.edit', [
            'items' => $book
        ]);
    }

    public function update(Request $request, $id) {
        $book = books:: findOrFail($id);

        $book->update ([
            'book_name' => $request->book_name,
            'book_author' => $request->book_author,
            'book_stock' => $request->book_stock,
            'book_date' => $request->book_date
        ]);

        return redirect('/books');
    }

    public function destroy($id) {
        $book = books::findOrFail($id);

        $book->delete();

        return redirect('/books');
    }
}
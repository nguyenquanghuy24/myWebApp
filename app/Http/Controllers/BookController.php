<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Danh sách sách
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Form thêm sách
    public function create()
    {
        return view('books.create');
    }

    // Xử lý thêm sách
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required|unique:books',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Đã thêm sách thành công!');
    }

    // Form sửa sách
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // Xử lý cập nhật sách
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required|unique:books,isbn,' . $book->id,
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Cập nhật sách thành công!');
    }

    // Xóa sách
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Đã xóa sách!');
    }
}

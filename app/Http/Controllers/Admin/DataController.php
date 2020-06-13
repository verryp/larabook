<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function authors()
    {
        $authors = Author::orderBy('id', 'desc');
        return datatables()->of($authors)
            ->addColumn('action', 'admin.author.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function books()
    {
        $books = Book::orderBy('name', 'asc');
        return datatables()->of($books)
            ->editColumn('cover', function (Book $book) {
                return '<img height="100px" src="' . $book->cover . '">';
            })
            ->addColumn('action', 'admin.book.action')
            ->addColumn('author', function (Book $book) {
                return $book->author->name;
            })
            ->addIndexColumn()
            ->rawColumns(['action', 'cover'])
            ->toJson();
    }
}

<?php

namespace App\Http\Controllers;

use App\Book;
use App\Digest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     *
     */
    public function getList()
    {
        $books = Book::where('status', 1)->orderBy('created_at', 'desc')->get();

        return view('list', compact('books'));
    }

    public function getDetail($id)
    {
        $book = Book::find($id);
        $digests = Digest::where('book_id', $id)->where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('detail', compact('digests', 'book'));
    }
}

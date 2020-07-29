<?php

namespace App\Http\Controllers;

use App\Book;
use App\Digest;
use Doctrine\DBAL\Schema\Schema;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     *
     */
    public function getList()
    {
        $books = DB::table('books')
            ->leftJoin('digests', function (JoinClause $join) {
                $join->on('books.id', '=', 'digests.book_id')
                    ->where('digests.status', 1);
            })
            ->where('books.status', 1)
            ->groupBy('books.id', 'digests.status')
            ->orderBy('books.created_at', 'desc')
            ->select('books.id', 'books.name', DB::raw('count(digests.id) as count'), 'digests.status')->get();
        return view('list', compact('books'));
    }

    public function getDetail(Book $book)
    {
        $digests = Digest::where('book_id', $book->id)->where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('detail', compact('digests', 'book'));
    }

    public function addBook(Request $request)
    {
        //表单验证
        Validator::make(request()->all(), [
            'author' => 'max:255|required',
            'name' => 'required',
            'sort' => 'integer'
        ], [
            'required' => ':attribute 必须填写！',
            'sort.integer' => '排序须为整数'
        ])->validate();

        $book = request(['author', 'name', 'sort']);
        $book['user'] = 'weisiren';
        Book::create($book);
        return redirect('/list');
    }

    public function digestEdit(Digest $digest)
    {
        return view('digest_edit', compact('digest'));
    }

    public function digestEditSubmit() {
        dd(request());
    }

}

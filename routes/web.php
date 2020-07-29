<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', "/list");

Route::get('/list', 'BookController@getList');
Route::get('/detail/{book}', 'BookController@getDetail');
Route::get("/book_add", function (){
    return view('book_add');
});
Route::post('book_add', 'BookController@addBook');
Route::get('/detail/{digest}/digest_edit', 'BookController@digestEdit');
Route::post('/detail/{digest}/digest_edit', 'BookController@digestEditSubmit');

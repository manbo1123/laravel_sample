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

Route::get('/', function () {
    return redirect('/articles');
});

Route::get('/articles', [App\Http\Controllers\ArticleController::class, 'index'])->name('article.list');              // 一覧表示ページ
Route::get('/article/new', [App\Http\Controllers\ArticleController::class, 'create'])->name('article.new');           // 新規投稿ページ
Route::get('/article/{id}', [App\Http\Controllers\ArticleController::class, 'show'])->name('article.show');           // 詳細表示ページ
Route::delete('/article/{id}', [App\Http\Controllers\ArticleController::class, 'destroy'])->name('article.delete');   // 削除
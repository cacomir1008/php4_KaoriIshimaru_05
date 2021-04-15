<?php

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

use App\Book;
use Illuminate\Http\Request;

// コントローラー名@メソッド名
// ダッシュボード表示
Route::get('/', 'BooksController@index');

// カテゴリ別全員のページ
Route::get('/all', 'BooksController@indexall');
// カテゴリ別ページ（自分だけ）
// 仕事の悩み
Route::get('/category0', 'BooksController@index2');
// 家庭の悩み
Route::get('/category1', 'BooksController@index3');
// 自分の悩み
Route::get('/category2', 'BooksController@index4');

//登録処理
Route::post('/books','BooksController@store');

//更新画面
Route::post('/booksedit/{books}', 'BooksController@edit');
    
//更新処理
Route::post('/books/update','BooksController@update');

//本を削除
Route::delete('/book/{book}', 'BooksController@destroy');

// ログイン認証を呼び出すコマンド
Auth::routes();
Route::get('/home', 'BooksController@index')->name('home');

// 追加（複数タイプのグループ化・ログインした時にしかアクセスできないように）
Route::group(['middleware' => 'auth'], function() {

    // 追加：ユーザ関連　使うアクション：一覧/詳細/編集/更新
    Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'edit', 'update']]);

    // 追加：フォロー/フォロー解除
    Route::post('users/{user}/follow', 'UsersController@follow')->name('follow');
    Route::delete('users/{user}/unfollow', 'UsersController@unfollow')->name('unfollow');
    
    // 追加：いいね機能　store＝保存/destroy＝削除
    Route::resource('favorites', 'FavoritesController', ['only' => ['store', 'destroy']]);
});

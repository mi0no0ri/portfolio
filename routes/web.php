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

// トップ画面
Route::get('/','UsersController@top')->name('top');
// 自己紹介
Route::get('about','UsersController@about')->name('about');
// 作品
Route::get('work','PostsController@work')->name('work');
// お問い合わせ
Route::get('contact','UsersController@contact')->name('contact');
// お問い合わせフォーム
Route::post('contact/create','ContactsController@create')->name('contact.create');
// メール送信(仮)
Route::post('contact','ContactsController@send')->name('send');

// ログイン
Auth::routes();

Route::middleware('auth')
  ->group(function(){
    // 投稿画面
    Route::get('post', 'PostsController@post')->name('post');
    // 投稿作成
    Route::post('create', 'PostsController@create')->name('create');
    // お問い合わせ
    Route::get('contactlist', 'ContactsController@contactlist')->name('contactlist');
  });

Route::get('home', 'HomeController@index')->name('home');

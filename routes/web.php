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

Route::get('/','UsersController@top')->name('top');
Route::get('about','UsersController@about')->name('about');
Route::get('work','PostsController@work')->name('work');
Route::get('contact','UsersController@contact')->name('contact');
Route::post('contact/create','ContactsController@create')->name('contact.create');

Route::post('contact','MailsCOntroller@send')->name('send');

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

Route::get('/', 'PostController@index')->name('home');

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');

Route::get('/author', 'PostController@authorIndex')->name('author.home');
Route::get('/author/post', 'PostController@create')->name('posts.create');
Route::post('/author/post', 'PostController@insert');
Route::get('/author/post/{id}', 'PostController@show')->name('posts.preview');
Route::get('/author/post/edit/{id}', 'PostController@edit');
Route::post('/author/post/edit/{id}', 'PostController@update')->name('post.update');
Route::get('/author/post/delete/{id}', 'PostController@destroy');

Route::get('/posts', 'PostController@index');
Route::get('/post/{id}', 'PostController@read')->name('posts.read');




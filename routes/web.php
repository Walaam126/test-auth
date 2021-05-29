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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
});
Route::get('/profile', function () {
    return view('user.profile');
})->name('profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Posts Routes
Route::get('/posts/index', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts/store', 'PostController@store')->name('posts.store');

Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
Route::put('/posts/{post}', 'PostController@update')->name('posts.update');

Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');

//Books Routs
Route::get('/books/index', 'BookController@index')->name('books.index');
Route::post('/books/store', 'BookController@store')->name('books.store');
Route::delete('/books/{book}', 'BookController@destroy')->name('books.destroy');
Route::get('/books/show/{id}', 'BookController@show')->name('books.show');
Route::put('/books/update/{id}', 'BookController@update')->name('books.update');


//Categories route
Route::resource('categories', 'CategoryController');
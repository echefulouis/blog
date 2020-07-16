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
Route::get('/laravel', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'BlogController@home')->name('home');

Route::get('/about', 'BlogController@about')->name('about');

Route::get('/contact','BlogController@contact' )->name('contact');
Route::post('/contact','BlogController@store' )->name('contact.store');
Route::get('/blog', 'BlogController@blog')->name('blog');

Route::get('/post-details', 'BlogController@details')->name('post-details');


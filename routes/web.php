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
    return view('index');
});

Route::get('/homes', function () {
    return view('index ');
});

Route::get('/blog', function () {
    return view('/templatesBis/blog');
});

Route::get('/services', function () {
    return view('/templatesBis/services');
});

Route::get('/contact', function () {
    return view('/templatesBis/contact');
});

Route::get('/elements', function () {
    return view('/templatesBis/elements');
});



Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

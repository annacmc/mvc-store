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

Auth::routes();

Route::get('/', function() {
    return view('ProductController@index');
});


Route::get('/createproduct', function () {
    return view('createproduct');
});


Route::get('/home', 'ProductController@index')->name('home');

Route::get('/', 'ProductController@index')->name('home');

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


Route::view('/', 'home');
Auth::routes();
Route::get('/home', 'HomeController@index')
    ->name('home');
Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/createproduct', function () {
    return view('createproduct');
});

Route::get('/shopping-cart-add', function () {
    Cart::add(1, 'Macbook Pro', 2900, 1, array());

    Cart::update(1,[
        'quantity' => $quantity
    ]);

    foreach (Cart::getContent() as $product){
        echo "Id: $product->id</br>";
        echo "Name: $product->name</br>";
        echo "Price $product->price</br>";
        echo "Quantity $product->quantity</br>";
    }
});

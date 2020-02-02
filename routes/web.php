<?php
use App\Product;
use Symfony\Component\Console\Input\Input;

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

/* Routes for user & admin auth */

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');


/* Routes for shopping cart & product display */

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::post('/cart-add', 'CartController@add')->name('cart.add');
Route::get('/cart-checkout', 'CartController@cart')->name('cart.checkout');
Route::post('/cart-clear', 'CartController@clear')->name('cart.clear');
Route::get('/brands/{url}', 'HomeController@brands')->name('brands');
Route::get('/categories/{url}', 'HomeController@categories')->name('categories');

/* Routes for product creation */

Route::get('/create', 'ProductController@create')->name('create');
Route::post('/products', 'ProductController@store')->name('store');

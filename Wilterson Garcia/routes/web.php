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

/* Site Routes */
Route::get('/', 'Site\\SiteController@index')->name('home');
Route::get('/home', function(){
    return redirect('/admin');
});

Route::get('products', 'Site\\SiteController@products')->name('allProducts');

Route::get('cart', function () {
    return view('site.cart');
})->name('cart');


/* Admin Routes */
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'Admin\\AdminController@index')->name('adminHome');

    Route::resource('products', 'Admin\\ProductController');
    Route::resource('sells', 'Admin\\SellController');
});


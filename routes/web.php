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

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::resource('/products', 'ProductController' , ['except' => ['show']])->middleware('auth');
Route::get('products/{product}', 'ProductController@show')->name('products.show');
Route::resource('/categories', 'CategoryController')->middleware('auth')->except(['show']);
Route::get('/', 'PagesController@index')->name('index');
Route::get('/lists', 'PagesController@lists')->name('lists');

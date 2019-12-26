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
    return view('welcome');
});

Route::match(['get', 'post'], 'product', (['as' => 'product', 'uses' => 'ProductController@index']));
Route::match(['get', 'post'], 'product_create', (['as' => 'product_create', 'uses' => 'ProductController@create']));
Route::match(['get', 'post'], 'product_edit/{id}', (['as' => 'product_edit', 'uses' => 'ProductController@edit']));
Route::match(['get', 'post'], 'product_store', (['as' => 'product_store', 'uses' => 'ProductController@store']));
Route::match(['get', 'post'], 'product_update/{id}', (['as' => 'product_update', 'uses' => 'ProductController@update']));
// Route::match(['get', 'post'], 'product_destroy/{id}', (['as' => 'product_destroy', 'uses' => 'ProductController@destroy']));
Route::delete('product_destroy/{id}', (['as' => 'product_destroy', 'uses' => 'ProductController@destroy']));

// Route::resource('products', 'ProductController');
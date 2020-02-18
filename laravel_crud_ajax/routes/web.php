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

Route::resource('crud_ajax','AjaxController');
// Route::match(['get', 'post'], 'crud_ajax', (['as' => 'crud_ajax', 'uses' => 'AjaxController@index']));
// // Route::match(['get', 'post'], 'user_create', (['as' => 'user_create', 'uses' => 'AjaxController@create']));
// Route::match(['get', 'post'], 'user_edit/{id}', (['as' => 'user_edit', 'uses' => 'AjaxController@edit']));
// Route::match(['get', 'post'], 'user_store', (['as' => 'user_store', 'uses' => 'AjaxController@store']));
// // Route::match(['get', 'post'], 'user_update/{id}', (['as' => 'user_update', 'uses' => 'AjaxController@update']));
// // Route::match(['get', 'post'], 'user_destroy/{id}', (['as' => 'user_destroy', 'uses' => 'AjaxController@destroy']));
// Route::delete('user_destroy/{id}', (['as' => 'user_destroy', 'uses' => 'AjaxController@destroy']));

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

Route::group(['prefix' => 'administrator/master-data/product', 'middleware' => 'auth'], function() {
    Route::get('/', 'ProductController@index')->name('administrator.master-data.product.index');
    Route::get('/create', 'ProductController@create')->name('administrator.master-data.product.create');
    Route::get('/show/{id}', 'ProductController@show')->name('administrator.master-data.product.show');
    Route::get('/edit/{id}', 'ProductController@edit')->name('administrator.master-data.product.edit');
    Route::delete('/destroy/{id}', 'ProductController@destroy')->name('administrator.master-data.product.destroy');
    Route::post('/store', 'ProductController@store')->name('administrator.master-data.product.store');
    Route::put('/update/{id}', 'ProductController@update')->name('administrator.master-data.product.update');
});

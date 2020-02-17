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
Route::group(['middleware' => 'prevent-back-history'], function () {

    Auth::routes();

    Route::get('/', 'WebController@index')->name('shop');

    Route::get('filter/{id}', 'WebController@filter')->name('filter');

    Route::get('new', 'WebController@newProducts')->name('newProducts');

    Route::get('bestseller', 'WebController@bestseller')->name('bestseller');

    Route::get('search', 'WebController@search');

    Route::get('detailProduct/{id}', 'WebController@detailProduct')->name('detailProduct');

    Route::group(['middleware' => ['auth', 'admin']], function () {
        Route::resource('/admin/categories', 'CategoriesController');

        Route::resource('/admin/products', 'ProductsController');

//Route::resource('/admin/allOrder', 'AllOrderController');

        Route::resource('/admin/users', 'UserController');

        Route::get('/admin', 'HomeController@index')->name('admin');
    });
});


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

Route::get('/', 'MainController@home')->name('home');

Route::get('/cat', 'MainController@categories')->name('categories');

Route::get('/auth', 'MainController@auth')->name('auth');

Route::get('/pay', 'MainController@payment')->name('payment');

Route::post('/', 'JSONCreator@sendJSONFile')->name('home');

Route::get('/admin', 'AdminController@display')->name('admin');



Route::get('/users', 'Admin\UserController@index')->name('users');



Route::get('/cust', 'Admin\CustomerController@index')->name('customers');



Route::get('/orders', 'Admin\OrderController@index')->name('orders');



Route::get('admin/cat_list', 'Admin\ProductCatController@index')->name('cat_list');

Route::get('admin/cat_create', 'Admin\ProductCatController@create')->name('cat_create');

Route::any('admin/cat_store', 'Admin\ProductCatController@store')->name('cat_store');

Route::get('admin/cat_sh', 'Admin\ProductCatController@show')->name('cat_sh');

Route::get('admin/cat_edit', 'Admin\ProductCatController@edit')->name('cat_edit');

Route::any('admin/cat_upd', 'Admin\ProductCatController@update')->name('cat_upd');

Route::get('admin/cat_del', 'Admin\ProductCatController@destroy')->name('cat_del');



Route::get('admin/prod_list', 'Admin\ProductController@index')->name('prod_list');

Route::get('admin/prod_create', 'Admin\ProductController@create')->name('prod_create');

Route::any('admin/prod_store', 'Admin\ProductController@store')->name('prod_store');

Route::get('admin/prod_sh', 'Admin\ProductController@show')->name('prod_sh');

Route::get('admin/prod_edit', 'Admin\ProductController@edit')->name('prod_edit');

Route::any('admin/prod_upd', 'Admin\ProductCatController@update')->name('prod_upd');

Route::get('admin/prod_del', 'Admin\ProductCatController@destroy')->name('prod_del');

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
Route::group(['prefix'=>'customers'], function () {
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/create', 'HomeController@create')->name('home.create');
    Route::post('/create', 'HomeController@store')->name('home.store');
    Route::get('/{id}/show', 'HomeController@show')->name('home.show');
    Route::get('/{id}/edit', 'HomeController@edit')->name('home.edit');
    Route::post('/{id}/update', 'HomeController@update')->name('home.update');
    Route::get('/{id}/delete', 'HomeController@delete')->name('home.delete');
    Route::get('/cart', 'CartController@view')->name('cart.view');
    Route::get('/add_to_cart/{id}', 'CartController@addItem')->name('cart.addItem');
});
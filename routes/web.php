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

Route::group(['prefix' => 'at/m', 'namespace' => 'View\home'], function () {
    Route::get('/', 'indexController@toIndex');
    Route::get('/basket', 'basketController@toBasket');
    Route::get('/boko', 'bokoController@toBoko');
    Route::get('/me', 'meController@toMe');
    Route::get('/goods/{id}', 'goodController@toGood');
    Route::get('/commit', 'orderController@toCommit');
    Route::group(['prefix' => 'me'], function () {
       Route::get('/orders', 'orderController@toOrders');
    });
});

Route::group(['prefix' => 'service', 'namespace' => 'Services'], function () {
    Route::get('/cart/add', 'cartController@add');
    Route::get('/cart/inc', 'cartController@inc');
    Route::get('/cart/remove', 'cartController@remove');
});
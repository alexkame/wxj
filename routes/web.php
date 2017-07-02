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

Route::group(['prefix' => 'at/m', 'namespace' => 'view\home'], function () {
    Route::get('/', 'indexController@toIndex');
    Route::get('/hot', 'indexController@toHot');
    Route::get('/cut', 'indexController@toCut');
    Route::get('/sale', 'indexController@toSale');
    Route::get('/hot', 'indexController@toHot');
    Route::get('/basket', 'basketController@toBasket');
    Route::get('/boko', 'bokoController@toBoko');
    Route::get('/me', 'meController@toMe');
    Route::get('/goods/{id}', 'goodController@toGood');
});
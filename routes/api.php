<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'Api\AuthController@login');
    Route::post('signup', 'Api\UserController@store');

});

Route::group([

    'middleware' => 'jwt.auth',
    'prefix' => 'v1'

], function ($router) {

    // PRODUCT
    Route::get('products', 'Api\ProductController@index');
    Route::get('products/{id}', 'Api\ProductController@show');
    Route::post('products', 'Api\ProductController@store');
    Route::put('products/{id}', 'Api\ProductController@update');
    Route::delete('products/{id}', 'Api\ProductController@destroy');
});



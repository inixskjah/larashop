<?php

use Illuminate\Support\Facades\Route;

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
Route::middleware('role:administrator')->group(function() {

    Route::prefix('products')->name('products.')->group(function() {

        Route::post('/', 'ProductController@store')->name('store');

        Route::put('/{product}', 'ProductController@update')->name('update');

        Route::delete('/{product}', 'ProductController@destroy')->name('destroy');
    });

});


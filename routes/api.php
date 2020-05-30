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


        Route::post('/{product}/cover-image', 'ProductCoverImageController@store')->name('coverImage.store');
    });

});

Route::middleware('role:customer')->group(function() {

    Route::prefix('orders')->name('orders.')->group(function() {

        Route::post('/', 'OrderController@store')->name('store');

    });

    Route::prefix('products')->name('products.')->group(function() {

        Route::prefix('{product}')->group(function() {

            Route::prefix('feedback')->name('feedback.')->group(function() {

                Route::get('/', 'ProductFeedbackController@index')->name('index');

                Route::post('/', 'ProductFeedbackController@store')->name('store');

                /**
                 *
                 * Like / Dislike functionality route
                 *
                 */
                Route::post('/{productFeedback}/rate', 'ProductFeedbackRateController@store')->name('rate.store');
            });

        });
    });


    Route::prefix('wishlist')->name('wishlist.')->group(function() {

        Route::post('/', 'WishlistController@store');

    });

    Route::prefix('payment')->name('payment.')->group(function() {

        Route::post('/', 'PaymentController@store')->name('store');

    });
});
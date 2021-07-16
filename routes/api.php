<?php

use Illuminate\Http\Request;
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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'Auth\AuthController@login');
    Route::post('register', 'Auth\RegisterController@register');
    Route::post('logout', 'Auth\LogOutController@logout');
    Route::post('refresh', 'Auth\AuthController@refresh');
    Route::post('me', 'Auth\AuthController@me');
    Route::post('preResetPassword', 'Auth\ResetPassController@preResetPassword');
    Route::post('confirmPIN', 'Auth\ResetPassController@confirmPIN');
    Route::post('resetPassword', 'Auth\ResetPassController@resetPassword');

});

/**
 * Nav
 */

//cart products
//search 

/************************************************/

 Route::group([

    'middleware' => [
        'api',
        // 'auth',
    ],

], function ($router) {

    /**
     * Category APIs
     */

    //Category CRUD

    Route::apiResource('categories', 'Api\CategoryController');

    /**
     * Product APIs
     */

    //Product CRUD

    Route::apiResource('products', 'Api\ProductController');

    //Product's Images

    Route::get('product/{product}/productImages', 'Api\ProductController@productImages');

    //Product's Reviews

    //Route::get('product/{product}/productImages', 'Api\ProductController@productImages');

    /**
     * Product Images APIs
     */

    //Product Images CRUD

    Route::apiResource('productImages', 'Api\ProductImageController');

    /**
     * Reviews 
     * 
     * Model , Factory , Controller, Route
     */

    //Reviews CRUD

    Route::apiResource('reviews', 'Api\ReviewController');

    
});

// return to Handling Middlewares, Securty
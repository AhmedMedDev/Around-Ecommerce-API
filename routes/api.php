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
     * 
     * Model, Factory, Controller, Route, Postman
     * 
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

    Route::get('product/{product}/reviews', 'Api\ProductController@reviews');

    /**
     * Product Images APIs
     */

    //Product Images CRUD

    Route::apiResource('productImages', 'Api\ProductImageController');

    /**
     * Product Colors APIs
     */

    //Product Colors CRUD

    Route::apiResource('productColors', 'Api\ProductColorController');

    /**
     * Product Sizes APIs
     */

    //Product Sizes CRUD

    Route::apiResource('productSizes', 'Api\ProductSizeController');

    /**
     * Reviews APIs
     */

    //Reviews CRUD

    Route::apiResource('reviews', 'Api\ReviewController');

    /**
     * Cart APIs
     * 
     */

    //Cart CRUD

    Route::apiResource('carts', 'Api\CartController');

    /**
     * Color APIs
     */

    //Color CRUD

    Route::apiResource('colors', 'Api\ColorController');

    /**
     * Size APIs
     */

    //Size CRUD

    Route::apiResource('sizes', 'Api\SizeController');

    /**
     * User 
     */

    //User CRUD

    //Route::apiResource('users', 'Api\UserController');

    //User Cart

    Route::get('user/{user}/cart', 'Api\UserController@cart');
    
});

// return to Handling Product's Images, Product's Color, Product's Sizes 

// Address Module
// Order Module
// Orderproducts Module
// Favorite Module
// User Module

// return to Handling Middlewares, Securty
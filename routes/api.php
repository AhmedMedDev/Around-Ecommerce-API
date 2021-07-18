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

    Route::post('login', 'Auth\AuthController@login')->name('login');
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
        // 'auth:api',
        // 'admin',
    ],

], function ($router) {

    /**
     * Category APIs //For admin only
     * 
     * Model, Factory, Controller, Route, Postman
     * 
     */

    //Category CRUD

    Route::apiResource('categories', 'Api\CategoryController');

    /**
     * Product APIs //For admin only Execpt index, show, productImages, reviews
     */

    //Product CRUD

    Route::apiResource('products', 'Api\ProductController');

    //Product's Images

    Route::get('product/{product}/productImages', 'Api\ProductController@productImages');

    //Product's Reviews

    Route::get('product/{product}/reviews', 'Api\ProductController@reviews');

    /**
     * Product Images APIs //For admin only
     */

    //Product Images CRUD

    Route::apiResource('productImages', 'Api\ProductImageController');

    /**
     * Product Colors APIs //For admin only Execpt show
     */

    //Product Colors CRUD

    Route::apiResource('productColors', 'Api\ProductColorController');

    /**
     * Product Sizes APIs //For admin only Execpt show
     */

    //Product Sizes CRUD

    Route::apiResource('productSizes', 'Api\ProductSizeController');

    /**
     * Offer APIs //For admin only Execpt show
     */

    //Offer CRUD

    Route::apiResource('offers', 'Api\OfferController');

    /**
     * Reviews APIs //For admin only Execpt show
     */

    //Reviews CRUD

    Route::apiResource('reviews', 'Api\ReviewController');

    /**
     * Cart APIs //For Spacific User
     * 
     */

    //Cart CRUD

    Route::apiResource('carts', 'Api\CartController');

    /**
     * Color APIs //For admin only
     */

    //Color CRUD

    Route::apiResource('colors', 'Api\ColorController');

    /**
     * Size APIs //For admin only
     */

    //Size CRUD

    Route::apiResource('sizes', 'Api\SizeController');

    /**
     * User APIs //For admin only Execpt cart
     */

    //User CRUD

    Route::apiResource('users', 'Api\UserController');

    //User Cart

    Route::get('user/{user}/cart', 'Api\UserController@cart');

    
    //Change Pasword

    Route::put('user/{user}/changePassword', 'Api\UserController@changePassword');
    
});

// Address Module
// Order Module
// Orderproducts Module
// Favorite Module

// return to Handling Middlewares, Securty
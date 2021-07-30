<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

define("PAGINATION_COUNT",5);

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


Route::group([

    'middleware' => 'api',

], function () {

    /** 
     * Product APIs //For admin only Except index, show, productImages, reviews, proSearch, proCatSearch // Secured
     */

    //Product CRUD

    Route::apiResource('products', 'Api\ProductController');

    //Product's Images

    Route::get('product/{product}/productImages', 'Api\ProductController@productImages');

    //Product's Reviews

    Route::get('product/{product}/reviews', 'Api\ProductController@reviews');

    //Search in product

    Route::get('product/search/{query}', 'Api\ProductController@proSearch');

    //Search in Category's product 

    Route::get('product/{category}/search/{query}', 'Api\ProductController@proCatSearch');

    /**
     * Product Images APIs //For admin only Except index, show // Secured
     */

    //Product Images CRUD

    Route::apiResource('productImages', 'Api\ProductImageController');

    /**
     * Product Colors APIs //For admin only Except index, show // Secured
     */

    //Product Colors CRUD

    Route::apiResource('productColors', 'Api\ProductColorController');

    /**
     * Product Sizes APIs //For admin only Except index, show // Secured
     */

    //Product Sizes CRUD

    Route::apiResource('productSizes', 'Api\ProductSizeController');

    /**
     * Offer APIs //For admin only Except index, show // Secured
     */

    //Offer CRUD

    Route::apiResource('offers', 'Api\OfferController');

    /**
     * Reviews APIs //For admin only Except index, show // Secured
     */

    //Reviews CRUD

    Route::apiResource('reviews', 'Api\ReviewController');

});



 Route::group([

    'middleware' => [
        'api',
        'auth:api',
    ],

], function () {


    /**
     * Cart APIs //For Admin only Except Store, Update, Destroy  // Secured
     * 
     */

    //Cart CRUD

    Route::apiResource('carts', 'Api\CartController');

    /** 
     * Favorite APIs //For Admin only Except Store, Update, Destroy // Secured
     */

    //Favorite CRUD

    Route::apiResource('favorites', 'Api\FavoriteController');

    /**
     * Address APIs //For Admin only Except Store, Update, Destroy // Secured
     */

    //Address CRUD

    Route::apiResource('addresses', 'Api\AddressController');

    /**
     * Order APIs //For Admin only Except Store // Secured
     */

    //Order CRUD

    Route::apiResource('orders', 'Api\OrderController');

    /**
     * Orderproducts APIs //For Admin only Except Store // Secured
     */

    //Orderproducts CRUD

    Route::apiResource('orderProducts', 'Api\OrderProductController');

    /**
     * User APIs //For admin only Except cart, Update, Destroy,
     * changePassword, User's Favorite, 
     * User's Addresses, User's Orders // Secured
     */

    //User CRUD

    Route::apiResource('users', 'Api\UserController');

    //User Cart

    Route::get('user/{user}/cart', 'Api\UserController@cart');
    
    //Change Pasword

    Route::put('user/{user}/changePassword', 'Api\UserController@changePassword');

    //User's Favorite

    Route::get('user/{user}/favorite', 'Api\UserController@favorite');

    //User's Addresses

    Route::get('user/{user}/addresses', 'Api\UserController@addresses');

    //User's Orders

    Route::get('user/{user}/orders', 'Api\UserController@orders');

    
});

//For admin only

Route::group([

    'middleware' => [
        'api',
        'auth:api',
        'admin',
    ],

], function () {

    /**
     * Category APIs 
     * 
     * Model, Factory, Controller, Route, Postman
     * 
     */

    //Category CRUD

    Route::apiResource('categories', 'Api\CategoryController');

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

});

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
    'namespace' => 'Api',

], function () {

    /** 
     * Product APIs //For admin only Except index, show, productImages, reviews, proSearch, proCatSearch // Secured
     */

    //Product CRUD

    Route::apiResource('products', 'ProductController')->except(['update']);

    Route::post('products/{product}', 'ProductController@update');

    //Product's Images

    Route::get('product/{product}/productImages', 'ProductController@productImages');

    //Product's Reviews

    Route::get('product/{product}/reviews', 'ProductController@reviews');

    //Search in product

    Route::get('product/search/{query}', 'ProductController@proSearch');

    //Search in Category's product 

    Route::get('product/{category}/search/{query}', 'ProductController@proCatSearch');

    /**
     * Product Images APIs //For admin only Except index, show // Secured
     */

    //Product Images CRUD

    Route::apiResource('productImages', 'ProductImageController');

    /**
     * Product Colors APIs //For admin only Except index, show // Secured
     */

    //Product Colors CRUD

    Route::apiResource('productColors', 'ProductColorController');

    /**
     * Product Sizes APIs //For admin only Except index, show // Secured
     */

    //Product Sizes CRUD

    Route::apiResource('productSizes', 'ProductSizeController');

    /**
     * Offer APIs //For admin only Except index, show // Secured
     */

    //Offer CRUD

    Route::apiResource('offers', 'OfferController');

    /**
     * Reviews APIs //For admin only Except index, show // Secured
     */

    //Reviews CRUD

    Route::apiResource('reviews', 'ReviewController');

});



 Route::group([

    'middleware' => [
        'api',
        'auth:api',
    ],
    'namespace' => 'Api',

], function () {


    /**
     * Cart APIs //For Admin only Except Store, Update, Destroy  // Secured
     * 
     */

    //Cart CRUD

    Route::apiResource('carts', 'CartController');

    /** 
     * Favorite APIs //For Admin only Except Store, Update, Destroy // Secured
     */

    //Favorite CRUD

    Route::apiResource('favorites', 'FavoriteController');

    /**
     * Address APIs //For Admin only Except Store, Update, Destroy // Secured
     */

    //Address CRUD

    Route::apiResource('addresses', 'AddressController');

    /**
     * Order APIs //For Admin only Except Store // Secured
     */

    //Order CRUD

    Route::apiResource('orders', 'OrderController');

    /**
     * Orderproducts APIs //For Admin only Except Store // Secured
     */

    //Orderproducts CRUD

    Route::apiResource('orderProducts', 'OrderProductController');

    /**
     * User APIs //For admin only Except cart, Update, Destroy,
     * changePassword, User's Favorite, 
     * User's Addresses, User's Orders // Secured
     */

    //User CRUD

    Route::apiResource('users', 'UserController')->except(["update"]);

    Route::post('users/{user}', 'UserController@update');

    //User Cart

    Route::get('user/{user}/cart', 'UserController@cart');
    
    //Change Pasword

    Route::put('user/{user}/changePassword', 'UserController@changePassword');

    //User's Favorite

    Route::get('user/{user}/favorite', 'UserController@favorite');

    //User's Addresses

    Route::get('user/{user}/addresses', 'UserController@addresses');

    //User's Orders

    Route::get('user/{user}/orders', 'UserController@orders');

    
});

//For admin only

Route::group([
    
    'middleware' => [
        'api',
        'auth:api',
        'admin',
    ],
    'prefix' => 'admin',
    'namespace' => 'Api',

], function () {

    /**
     * Category APIs 
     * 
     * Model, Factory, Controller, Route, Postman
     * 
     */

    //Category CRUD

    Route::apiResource('categories', 'CategoryController');

    /**
     * Color APIs 
     */

    //Color CRUD

    Route::apiResource('colors', 'ColorController');

    /**
     * Size APIs 
     */

    //Size CRUD

    Route::apiResource('sizes', 'SizeController');

});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([

    'middleware' => [
        'api',
        'auth:api',
    ],
    'namespace' => 'Api',

], function () {

    /**
     * User APIs //For admin only Except cart, Update, Destroy,
     * changePassword, User's Favorite, 
     * User's Addresses, User's Orders // Secured
     */

    //User CRUD

    Route::apiResource('users', 'UserController')->except(["update"]);

    // User Update
    Route::post('users/{user}', 'UserController@update');

    //User Cart

    Route::get('users/{user}/cart', 'UserController@cart');
    
    //Change Pasword

    Route::put('users/{user}/changePassword', 'UserController@changePassword');

    //User's Favorite

    Route::get('users/{user}/favorite', 'UserController@favorite');

    //User's Addresses

    Route::get('users/{user}/addresses', 'UserController@addresses');

    //User's Orders

    Route::get('users/{user}/orders', 'UserController@orders');

    
});
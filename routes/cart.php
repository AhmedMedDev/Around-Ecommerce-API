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
     * Cart APIs //For Admin only Except Store, Update, Destroy  // Secured
     * 
     */

    //Cart CRUD

    Route::apiResource('carts', 'CartController');

    
});
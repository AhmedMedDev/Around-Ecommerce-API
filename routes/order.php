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
     * Order APIs //For Admin only Except Store // Secured
     */

    //Order CRUD

    Route::apiResource('orders', 'OrderController');

    /**
     * Orderproducts APIs //For Admin only Except Store // Secured
     */

    //Orderproducts CRUD

    Route::apiResource('orderProducts', 'OrderProductController');

    
});
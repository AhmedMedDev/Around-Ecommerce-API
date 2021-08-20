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
     * Address APIs //For Admin only Except Store, Update, Destroy // Secured
     */

    //Address CRUD

    Route::apiResource('addresses', 'AddressController');

    
});
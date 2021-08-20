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
     * Favorite APIs //For Admin only Except Store, Update, Destroy // Secured
     */

    //Favorite CRUD

    Route::apiResource('favorites', 'FavoriteController');

    
});
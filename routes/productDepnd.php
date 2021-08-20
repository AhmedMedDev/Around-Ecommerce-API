<?php 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([

    'middleware' => 'api',
    'namespace' => 'Api',

], function () {

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
     * Color APIs //For admin only Except index, show // Secured
     */

    //Color CRUD

    Route::apiResource('colors', 'ColorController');

    /**
     * Size APIs //For admin only Except index, show // Secured
     */

    //Size CRUD

    Route::apiResource('sizes', 'SizeController');

});
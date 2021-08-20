<?php 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([

    'middleware' => 'api',
    'namespace' => 'Api',

], function () {

    /** 
     * Product APIs //For admin only Except index, show, productImages, reviews, proSearch, proCatSearch // Secured
     */

    //Product CRUD

    Route::apiResource('products', 'ProductController')->except(['update']);

    // Product Update
    Route::post('products/{product}', 'ProductController@update');

    //Product's Images

    Route::get('products/{product}/productImages', 'ProductController@productImages');

    //Product's Reviews

    Route::get('products/{product}/reviews', 'ProductController@reviews');

    //Search in product

    Route::get('products/search/{query}', 'ProductController@proSearch');

    //Search in Category's product 

    Route::get('products/{category}/search/{query}', 'ProductController@proCatSearch');

});
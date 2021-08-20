<?php 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([

    'middleware' => 'api',
    'namespace' => 'Api',

], function () {

    /**
     * Offer APIs //For admin only Except index, show // Secured
     */

    //Offer CRUD

    Route::apiResource('offers', 'OfferController');

});
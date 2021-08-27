<?php 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([

    'middleware' => 'api',
    'namespace' => 'Api',

], function () {

    /**
     * Reviews APIs //For admin only Except index, show // Secured
     */

    //Reviews CRUD

    Route::apiResource('reviews', 'ReviewController');

    Route::get('reviewsWithUsers', 'ReviewController@indexWithUser');

});
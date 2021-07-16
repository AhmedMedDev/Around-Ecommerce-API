<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

    Route::post('login', 'Auth\AuthController@login');
    Route::post('register', 'Auth\RegisterController@register');
    Route::post('logout', 'Auth\LogOutController@logout');
    Route::post('refresh', 'Auth\AuthController@refresh');
    Route::post('me', 'Auth\AuthController@me');
    Route::post('preResetPassword', 'Auth\ResetPassController@preResetPassword');
    Route::post('confirmPIN', 'Auth\ResetPassController@confirmPIN');
    Route::post('resetPassword', 'Auth\ResetPassController@resetPassword');

});

/**
 * Nav
 */

//cart products
//search 

/**
 * Product
 */

 /**
  * category model
  * product model
  * product_images model
  */

  /**
   * category controller
   * product_images controller
   * Product controller 
   * 
   */

//Product CRUD

/**
 * Reviews 
 */
/**
 * review model
 * 
 */

//Reviews CRUD

/************************************************/

 Route::group([

    'middleware' => 'api',

], function ($router) {

    /**
     * Category APIs
     */

    //Category CRUD

    Route::apiResource('categories', 'Api\CategoryController');

    
});
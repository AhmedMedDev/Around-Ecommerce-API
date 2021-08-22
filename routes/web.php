<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/verifyEmail', 'mails.verifyEmail');

Route::get('user/verify/{verify_code}','Auth\VerificationController@verify')->name('verify');

Route::get('login/github', 'Auth\LoginWithX@redirectToProvider');

Route::get('login/github/callback', 'Auth\LoginWithX@handleProviderCallback');

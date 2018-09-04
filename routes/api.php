<?php

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

//Route::post('authenticate', 'AuthController@authenticate');
//
//Route::group(['middleware' => 'jwt.auth'], function()
//{
//    Route::get('user', 'UserController@show');
//    Route::post('user/profile/update', 'UserController@updateProfile');
//    Route::post('user/password/update', 'UserController@updatePassword');
//});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

<?php

use Illuminate\Support\Facades\Route;


// auth routs for messenger & driver
Route::group(['middleware' => 'api', 'prefix' => 'employee', 'namespace' => 'Employee\Auth'], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
//    Route::post('refresh', 'AuthController@refresh');
    // Route::post('profile', 'AuthController@me');

});
// end


// messenger routes
Route::group(['middleware' => 'api', 'prefix' => 'employee', 'namespace' => 'Employee\Messenger'], function ($router) {


});

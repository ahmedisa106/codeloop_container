<?php

use Illuminate\Support\Facades\Route;


// Driver routes
Route::group(['middleware' => 'api', 'prefix' => 'driver', 'namespace' => 'Employee\Driver'], function ($router) {


    // container rentals
    Route::get('get-container-rentals', 'ContainerRentalController@getContainerRentals');
//    Route::post('container-rental/show', 'ContainerRentalController@show');
    // end container rentals

});

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

    // customers
    Route::get('customers', 'CustomerController@getCustomers');
    Route::post('customers/create', 'CustomerController@create');
    // end customers


    // Contracts
    Route::get('contracts', 'ContractController@getContracts');
    Route::get('contracts/show', 'ContractController@show');
    Route::get('contracts/search', 'ContractController@search');
    // end Contracts

    // drivers
    Route::get('drivers', 'DriverController@getDriver');
    // end drivers

    // categories
    Route::get('categories', 'CategoryController@getCategories');
    // end categories

    // container rentals
    Route::get('get-container', 'ContainerRentalController@getContainer');
    Route::get('container-rentals', 'ContainerRentalController@getContainerRentals');
    Route::post('container-rental/create', 'ContainerRentalController@create');
    Route::post('container-rental/assign-driver-to-drive', 'ContainerRentalController@assignDriverToDrive');
    Route::post('container-rental/assign-driver-to-discharge', 'ContainerRentalController@assignDriverToDischarge');
    // end container rentals

});

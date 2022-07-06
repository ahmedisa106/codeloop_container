<?php

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


Route::group(['middleware' => 'api', 'namespace' => 'Company\Auth',], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('profile', 'AuthController@me');
    Route::post('profile/update', 'AuthController@updateProfile');

});

Route::group(['middleware' => ['api'], 'namespace' => 'Company',], function () {


    Route::get('index', 'HomeController@index');
    // employees Api
    Route::get('employees', 'EmployeeController@getAllEmployees');
    Route::get('employees-type', 'EmployeeController@getEmployeesByType');
    Route::get('employee/show', 'EmployeeController@show');
    // end employees

    // customers
    Route::get('customers', 'CustomerController@getCustomers');
    Route::get('customers/show', 'CustomerController@show');
    // end customers

    // Contracts
    Route::get('contracts', 'ContractController@getContracts');
    Route::get('contracts/show', 'ContractController@show');
    Route::get('contracts/search', 'ContractController@search');
    // end Contracts

    // container rentals
    Route::get('containerRentals', 'ContainerRentalController@getAllRentals');
    Route::get('containerRentals/show', 'ContainerRentalController@show');
    Route::get('containerRentals/status', 'ContainerRentalController@getStatus');

    // end container rentals


    //terms & conditions
    Route::get('/terms', 'HomeController@getTerms');
    // end terms & conditions

    // about
    Route::get('/about-us', 'HomeController@about');
    // end about

    // contact-us
    Route::post('/contact-us', 'HomeController@contactUs');
    // end contact-us
});

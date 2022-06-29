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

});

Route::group(['middleware' => ['api'], 'namespace' => 'Company',], function () {


    Route::get('index', 'HomeController@index');
    // employees Api
    Route::get('employees', 'EmployeeController@getAllEmployees');
    Route::get('employees-type', 'EmployeeController@getEmployeesByType');
    Route::get('employee/show', 'EmployeeController@show');
    // end employees

    // container rentals
    Route::get('containerRentals', 'ContainerRentalController@getAllRentals');
    Route::get('containerRentals/show', 'ContainerRentalController@show');
    Route::get('containerRentals/status', 'ContainerRentalController@getStatus');

    // end container rentals
});

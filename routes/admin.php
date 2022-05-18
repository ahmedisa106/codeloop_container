<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('/login', 'auth\AuthController@loginForm')->name('admin.login_form');
    Route::post('/login', 'auth\AuthController@login')->name('admin.login');
});
Route::prefix('admin')->middleware('auth:admin')->group(function () {

    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::post('/logout', 'auth\AuthController@logout')->name('admin.logout');

    // companies routes
    Route::get('companies/data', 'CompanyController@data')->name('companies.data');
    Route::resource('companies', 'CompanyController');
    // end companies routes

});

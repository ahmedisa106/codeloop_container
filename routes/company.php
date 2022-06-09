<?php

use Illuminate\Support\Facades\Route;


Route::prefix('company')->middleware(['guest:company,moderator,employee'])->group(function () {
    Route::get('/login', 'auth\AuthController@loginForm')->name('company.login_form');
    Route::post('/login', 'auth\AuthController@login')->name('company.login');
});


Route::prefix('company')->middleware(['auth:company,moderator,employee', 'active'])->group(function () {
    Route::post('/logout', 'auth\AuthController@logout')->name('company.logout');
    Route::get('/', 'HomeController@index')->name('company.home');
    // apps
    Route::post('apps/bulk-delete', 'AppController@bulkDelete')->name('apps.bulkDelete');
    Route::get('apps/data', 'AppController@data')->name('apps.data');
    Route::post('apps/update-status/{id}', 'AppController@updateStatus')->name('apps.updateStatus');
    Route::resource('apps', 'AppController');
    // end job-types
});

Route::prefix('company')->middleware(['auth:company,moderator,employee', 'active', 'active_app'])->group(function () {

    // branches
    Route::post('branches/bulk-delete', 'BranchController@bulkDelete')->name('branches.bulkDelete');
    Route::get('branches/data', 'BranchController@data')->name('branches.data');
    Route::get('branches/download-pdf', 'BranchController@pdf')->name('branches.pdf');
    Route::resource('branches', 'BranchController');
    // end branches

    // categories
    Route::post('categories/bulk-delete', 'CategoryController@bulkDelete')->name('categories.bulkDelete');
    Route::get('categories/data', 'CategoryController@data')->name('categories.data');
    Route::get('categories/download-pdf', 'CategoryController@pdf')->name('categories.pdf');
    Route::resource('categories', 'CategoryController');
    // end categories

    // category-sizes
    Route::post('category-sizes/bulk-delete', 'CategorySizeController@bulkDelete')->name('category-sizes.bulkDelete');
    Route::get('category-sizes/data', 'CategorySizeController@data')->name('category-sizes.data');
    Route::get('category-sizes/download-pdf', 'CategorySizeController@pdf')->name('category-sizes.pdf');
    Route::resource('category-sizes', 'CategorySizeController');
    // end category-sizes

    // rent-types
    Route::post('rent-types/bulk-delete', 'RentTypeController@bulkDelete')->name('rent-types.bulkDelete');
    Route::get('rent-types/data', 'RentTypeController@data')->name('rent-types.data');
    Route::get('rent-types/download-pdf', 'RentTypeController@pdf')->name('rent-types.pdf');
    Route::resource('rent-types', 'RentTypeController');
    // end rent-types

    // job-types
    Route::post('job-types/bulk-delete', 'JobTypeController@bulkDelete')->name('job-types.bulkDelete');
    Route::get('job-types/data', 'JobTypeController@data')->name('job-types.data');
    Route::get('job-types/download-pdf', 'JobTypeController@pdf')->name('job-types.pdf');
    Route::resource('job-types', 'JobTypeController');
    // end job-types

    // roles & permissions
    Route::post('roles/bulk-delete', 'RoleController@bulkDelete')->name('roles.bulkDelete');
    Route::get('roles/data', 'RoleController@data')->name('roles.data');
    Route::get('roles/download-pdf', 'RoleController@pdf')->name('roles.pdf');
    Route::resource('roles', 'RoleController');
    // end roles & permissions

    // moderators
    Route::post('moderators/bulk-delete', 'ModeratorController@bulkDelete')->name('moderators.bulkDelete');
    Route::get('moderators/data', 'ModeratorController@data')->name('moderators.data');
    Route::get('moderators/download-pdf', 'ModeratorController@pdf')->name('moderators.pdf');
    Route::resource('moderators', 'ModeratorController');
    // end moderators

    // employees
    Route::post('employees/bulk-delete', 'EmployeeController@bulkDelete')->name('employees.bulkDelete');
    Route::get('employees/data', 'EmployeeController@data')->name('employees.data');
    Route::get('employees/download-pdf', 'EmployeeController@pdf')->name('employees.pdf');
    Route::resource('employees', 'EmployeeController');
    // end employees

    // trucks
    Route::post('trucks/bulk-delete', 'TruckController@bulkDelete')->name('trucks.bulkDelete');
    Route::get('trucks/data', 'TruckController@data')->name('trucks.data');
    Route::get('trucks/download-pdf', 'TruckController@pdf')->name('trucks.pdf');
    Route::resource('trucks', 'TruckController');
    // end trucks

    // customers
    Route::post('customers/bulk-delete', 'CustomerController@bulkDelete')->name('customers.bulkDelete');
    Route::get('customers/data', 'CustomerController@data')->name('customers.data');
    Route::get('customers/download-pdf', 'CustomerController@pdf')->name('customers.pdf');
    Route::resource('customers', 'CustomerController');
    // end customers

});

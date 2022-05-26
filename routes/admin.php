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
    Route::post('companies/bulkDelete', 'CompanyController@bulkDelete')->name('companies.bulkDelete');
    Route::get('companies/history/{id}', 'CompanyController@history')->name('companies.history');
    Route::resource('companies', 'CompanyController');
    // end companies routes

    // Blogs routes
    Route::get('blogs/data', 'BlogController@data')->name('blogs.data');
    Route::post('blogs/bulkDelete', 'BlogController@bulkDelete')->name('blogs.bulkDelete');
    Route::resource('blogs', 'BlogController');
    // end Blogs routes

    // services routes
    Route::get('services/data', 'ServiceController@data')->name('services.data');
    Route::post('services/bulkDelete', 'ServiceController@bulkDelete')->name('services.bulkDelete');
    Route::resource('services', 'ServiceController');
    // end services routes

    // sliders routes
    Route::get('sliders/data', 'SliderController@data')->name('sliders.data');
    Route::post('sliders/bulkDelete', 'SliderController@bulkDelete')->name('sliders.bulkDelete');
    Route::resource('sliders', 'SliderController');
    // end services routes

    // packages routes
    Route::get('packages/data', 'PackageController@data')->name('packages.data');
    Route::post('packages/bulkDelete', 'PackageController@bulkDelete')->name('packages.bulkDelete');
    Route::get('packages/getPackage', 'PackageController@getPackage')->name('packages.getPackage');
    Route::resource('packages', 'PackageController');
    // end packages routes

    // clients routes
    Route::get('clients/data', 'ClientController@data')->name('clients.data');
    Route::post('clients/bulkDelete', 'ClientController@bulkDelete')->name('clients.bulkDelete');
    Route::resource('clients', 'ClientController');
    // end clients routes


    // settings
    Route::get('/settings', 'SettingController@index')->name('settings.index');
    Route::post('/settings', 'SettingController@update')->name('settings.store');
    // end settings

    // about
    Route::get('/about', 'AboutController@index')->name('about.index');
    Route::post('/about', 'AboutController@update')->name('about.store');
    // end about

    // terms
    Route::get('/terms', 'TermController@index')->name('terms.index');
    Route::post('/terms', 'TermController@update')->name('terms.store');
    // end about

    //contact us
    Route::get('contact-us/data', 'ContactUsController@data')->name('contact-us.data');
    Route::post('contact-us/bulkDelete', 'ContactUsController@bulkDelete')->name('contact-us.bulkDelete');
    Route::resource('contact-us', 'ContactUsController');
    //end contact us

    Route::get('subscriptions/data', 'SubscriptionController@data')->name('subscriptions.data');
    Route::post('subscriptions/company-pending', 'SubscriptionController@changePending')->name('subscriptions.changePending');
    Route::get('subscriptions/company-resubscribed/{id}', 'SubscriptionController@companyResubscribed')->name('subscriptions.resubscribed');
    Route::put('subscriptions/company-resubscribed/{id}', 'SubscriptionController@subscribed')->name('subscriptions.subscribed');
    Route::resource('subscriptions', 'SubscriptionController');

});

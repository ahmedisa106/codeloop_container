<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();
Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapXmlController::class, 'index']);

Route::get('/clear-cache', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    return 'cache cleared';
});
Route::get('/about', 'HomeController@about')->name('website.about');
Route::get('/services', 'HomeController@services')->name('website.services');
Route::get('/services/{id}', 'HomeController@showService')->name('website.services.show');
Route::get('packages', 'HomeController@packages')->name('website.packages');
Route::post('packages', 'HomeController@packageRequest')->name('website.packageRequest');
Route::get('/blogs', 'HomeController@blogs')->name('website.blogs');
Route::get('/blogs/{id}', 'HomeController@showBlog')->name('website.blogs.show');
Route::get('/terms', 'HomeController@terms')->name('website.terms');
Route::get('contact-us', 'HomeController@contact')->name('website.contact');
Route::post('contact-us', 'HomeController@contactUs')->name('website.contactUs');
Route::get('/', 'HomeController@index')->name('home');

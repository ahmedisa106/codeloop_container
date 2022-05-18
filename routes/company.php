<?php

use Illuminate\Support\Facades\Route;

Route::prefix('company')->middleware('auth:company')->group(function () {


});

<?php

namespace App\Providers;


use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('settings')) {
            $setting = Setting::first();
            View::composer('*', function ($view) use ($setting) {
                $view->with(['setting' => $setting]);
            });
        }
        Schema::defaultStringLength(191);
    }
}

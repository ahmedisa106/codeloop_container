<?php

namespace App\Providers;


use App\Models\Company;
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
            $clients = Company::whereHas('package', function ($model) {
                $model->where('status', 'subscribed');
            })->get(['id', 'logo']);


            View::composer('*', function ($view) use ($setting, $clients) {
                $view->with(['setting' => $setting]);
                $view->with(['clients' => $clients]);
            });
        }
        Schema::defaultStringLength(191);
    }
}

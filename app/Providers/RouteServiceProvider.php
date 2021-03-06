<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $ApiNamespace = 'App\Http\Controllers\Api';
    protected $AdminNamespace = 'App\Http\Controllers\Admin';
    protected $CompanyNamespace = 'App\Http\Controllers\Company';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';
    public const Admin = '/admin';
    public const Company = '/company';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapMessengerApiRoutes();
        $this->mapDriverApiRoutes();
        $this->mapWebRoutes();

        $this->mapAdminRoutes();
        $this->mapCompanyRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    protected function mapAdminRoutes()
    {
        Route::middleware('web')
            ->namespace($this->AdminNamespace)
            ->group(base_path('routes/admin.php'));
    }

    protected function mapCompanyRoutes()
    {
        Route::middleware('web')
            ->namespace($this->CompanyNamespace)
            ->group(base_path('routes/company.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->ApiNamespace)
            ->group(base_path('routes/api.php'));
    }

    protected function mapMessengerApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->ApiNamespace)
            ->group(base_path('routes/messenger_api.php'));
    }

    protected function mapDriverApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->ApiNamespace)
            ->group(base_path('routes/driver_api.php'));
    }
}

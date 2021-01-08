<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

    protected $apiNamespace = 'App\Http\Controllers\Api';


    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */

    public const HOME = '/home';
    public const PatientHOME = '/patient/home';
    public const HospitalHOME = '/hospital/home';
    public const AdminHOME = '/admin/home';

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

        $this->mapGuestRoutes();

        $this->mapAdminRoutes();

        $this->mapHospitalRoutes();

        $this->mapPatientRoutes();
    }

    /**
     * Define the "admin" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::group([
            'middleware' => ['web', 'admin', 'auth:admin', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
            'prefix' => LaravelLocalization::setLocale() . '/admin',
            'as' => 'admin.',
            'namespace' => $this->namespace . "\Admin",
        ], function ($router) {
            require base_path('routes/admin.php');
        });
    }


    protected function mapPatientRoutes()
    {
        Route::group([
            'middleware' => ['web', 'auth', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
            'prefix' => LaravelLocalization::setLocale() . '/patient',
            'as' => 'patient.',
            'namespace' => $this->namespace . "\Patient",
        ], function ($router) {
            require base_path('routes/patient.php');
        });
    }


    /**
     * Define the "hospital" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapHospitalRoutes()
    {
        Route::group([
            'middleware' => ['web', 'hospital', 'auth:hospital', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
            'prefix' => 'hospital',
            'as' => 'hospital.',
            'namespace' => $this->namespace . "\Hospital",
        ], function ($router) {
            require base_path('routes/hospital.php');
        });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapGuestRoutes()
    {
        Route::middleware(['web', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
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
        Route::group([
            'middleware' => ['enforceJson', 'api', 'api_version:v1', 'api_localization'],
            'namespace'  => "{$this->apiNamespace}\V1",
            'prefix'     => 'api/v1',
        ], function ($router) {
            require base_path('routes/Api/v1.php');
        });
    }
}

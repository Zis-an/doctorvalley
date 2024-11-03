<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->loadModuleRoutes();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

        });
    }

    private function loadModuleRoutes(): void
    {
        Route::middleware('web')
        ->prefix('/backoffice')
        ->group(base_path('modules/Admin/Routes/web.php'));

        Route::middleware('web')
            ->group(base_path('modules/Blog/Routes/web.php'));

        Route::middleware('web')
        ->group(base_path('modules/Doctor/Routes/web.php'));

        Route::middleware('web')
        ->group(base_path('modules/Chamber/Routes/web.php'));

        Route::middleware('web')
        ->group(base_path('modules/Location/Routes/web.php'));

        Route::middleware('web')
        ->group(base_path('modules/Course/Routes/web.php'));

        Route::middleware('web')
            ->group(base_path('modules/Degree/Routes/web.php'));

        Route::middleware('web')
        ->group(base_path('modules/Speciality/Routes/web.php'));

        Route::middleware('web')
        ->group(base_path('modules/Institute/Routes/web.php'));

        Route::middleware('web')
        ->group(base_path('modules/ChamberAdmin/Routes/web.php'));

        Route::middleware('web')
            ->group(base_path('modules/Feedback/Routes/web.php'));
    }
}

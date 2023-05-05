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
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/';
    public const HOME_PANEL = '/@thepanel';

    protected $panelNamespace = 'App\Http\Controllers\Panel';
    protected $apiNamespace = 'App\Http\Controllers\Api';
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {

            Route::prefix('api')
                ->middleware(['api'])
                ->name('api.')
                ->namespace($this->apiNamespace)
                ->group(base_path('routes/api.php'));

            Route::prefix(config('panel.path'))
                ->middleware(['web', 'inertia'])
                ->name('panel.')
                ->namespace($this->panelNamespace)
                ->group(base_path('routes/panel.php'));

            Route::middleware(['web'])
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
    public static function home(Request $request)
    {
        return $request->header('Is-Inertia') ?
            self::HOME_PANEL :
            self::HOME;
    }
}

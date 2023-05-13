<?php

namespace App\Providers;

use App\View\Composers\FrontComposer;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        Vite::useScriptTagAttributes([
            'defer' => true, // Specify an attribute without a value...
        ]);

        Vite::macro(
            'image',
            fn(string $asset) => Vite::asset("resources/frontend/images/{$asset}"),
        );

        View::composer(
            ['*.php', 'layouts.main', 'layouts.email', 'errors::404'],
            FrontComposer::class,
        );
    }
}

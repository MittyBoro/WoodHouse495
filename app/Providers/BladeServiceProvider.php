<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Vite::useScriptTagAttributes([
            'defer' => true, // Specify an attribute without a value...
        ]);

        Vite::macro('image', fn (string $asset) => $this->asset("resources/frontend/images/{$asset}"));
    }

    private function strToArgs($str)
    {
        $args = explode(',', trim($str, "() "));

        foreach ($args as $key => $val) {
            $args[$key] = trim($val, "' ");
        }

        return $args;
    }
}

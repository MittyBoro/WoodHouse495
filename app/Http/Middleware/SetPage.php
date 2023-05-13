<?php

namespace App\Http\Middleware;

use App\Models\Page;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SetPage
{
    public function handle(Request $request, Closure $next)
    {
        $slug = explode('/', $request->path())[0] ?: 'index';

        $page = Page::findForFront($slug);

        $request->attributes->add(['page' => $page]);

        View::share('page', $page);

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // не авторизован
        if (!Auth::check()) {
            return redirect()->route('panel.login');
        }

        $rightRole = $guards[0];
        $user = Auth::user();

        // нельзя в админку - выкинуть
        if (!in_array($user->role, User::ROLES)) {
            return abort(403);
        }

        if ($rightRole == 'editor' && !$user->is_editor) {
            return abort(403);
        }

        if ($rightRole == 'admin' && !$user->is_admin) {
            return abort(403);
        }

        return $next($request);
    }
}

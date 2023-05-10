<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    protected function toHome(Request $request)
    {
        return $request->header('Is-Inertia') ?
            config('panel.path') :
            '/';
    }
}

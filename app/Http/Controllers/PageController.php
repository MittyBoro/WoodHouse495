<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $pageView = $request->get('page')->view;
        $viewName = view()->exists('pages.' . $pageView)
            ? $pageView
            : 'default';

        return view($viewName);
    }
}

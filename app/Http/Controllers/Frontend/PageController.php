<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $pageView = 'pages.' . $request->get('page')->view;
        $viewName = view()->exists($pageView) ? $pageView : 'pages.default';

        return view($viewName);
    }
}

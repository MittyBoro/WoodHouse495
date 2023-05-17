<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $portfolios = Portfolio::onHome()
            ->queryList()
            ->get();

        return view('pages.index', [
            'portfolios' => $portfolios,
        ]);
    }
}

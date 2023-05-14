<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $portfolios = Portfolio::take('6')
            ->queryList()
            ->get();

        return view('pages.index', [
            'portfolios' => $portfolios,
        ]);
    }
}

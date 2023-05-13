<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::limit(10)->getFrontList('preview');

        return view('index', [
            'articles' => $articles,
        ]);
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::getFrontList();

        return view('pages.articles', [
            'articles' => $articles,
        ]);
    }
    public function show(Request $request, $slug)
    {
        $article = Article::frontBySlug($slug);

        $page = $this->replacePageData($request->get('page'), $article);

        return view('pages.single-article', [
            'page' => $page,
            'article' => $article,
            'articles' => $article->similars,
        ]);
    }
}

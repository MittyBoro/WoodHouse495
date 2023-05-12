<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\Panel\ArticleRequest;
use App\Models\Panel\Article;
use Illuminate\Http\Request;

use Inertia\Inertia;


class ArticleController extends Controller
{

    public function index(Request $request)
    {
        $articles = Article::orderByStr($request->get('sort'))
            ->filter($request->all())
            ->customPaginate($request->get('perPage', 20));

        return Inertia::render('Articles/Index', [
            'list' => $articles,
        ]);
    }

    public function create()
    {
        return Inertia::render('Articles/Form');
    }

    public function store(ArticleRequest $request)
    {
        $data = $request->validated();
        $created = Article::create($data);

        return redirect(route('panel.articles.edit', $created->id));
    }

    public function show(Article $article)
    {
        return redirect()->route('front.articles', $article->slug);
    }

    public function edit(Article $article)
    {
        $article->load(['props']);

        return Inertia::render('Articles/Form', [
            'item' => $article,
        ]);
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $data = $request->validated();
        $article->update($data);
        $article->saveAfter($data);

        return back();
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return back();
    }
}

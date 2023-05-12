<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\Panel\ArticleRequest;
use App\Models\Panel\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::orderByStr($request->get('sort'))
            ->filter($request->all())
            ->orderByStr($request->get('sort'))
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
        $created->saveAfter($data);

        return redirect()->route('panel.articles.edit', $created->id);
    }

    public function show(Article $article)
    {
        return redirect()->route('front.articles', $article->slug);
    }

    public function edit(Article $article)
    {
        return Inertia::render('Articles/Form', [
            'item' => $article->append(['gallery']),
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
        if (!Auth::user()->is_admin) {
            return back()->withErrors(['Вы не имеете прав для удаления']);
        }
        $article->delete();

        return back();
    }
}

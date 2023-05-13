<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\Panel\PortfolioRequest;
use App\Models\Panel\Portfolio;
use App\Models\Panel\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $portfolios = Portfolio::orderByStr($request->get('sort'))
            ->filter($request->all())
            ->with(['media', 'page'])
            ->customPaginate($request->get('perPage', 20));

        return Inertia::render('Portfolios/Index', [
            'list' => $portfolios,
            'pages' => Page::get(['id', 'title']),
        ]);
    }

    public function create()
    {
        return Inertia::render('Portfolios/Form', [
            'pages' => Page::get(['id', 'title']),
        ]);
    }

    public function store(PortfolioRequest $request)
    {
        $data = $request->validated();
        $portfolio = Portfolio::create($data);
        $portfolio->saveAfter($data);

        return redirect(route('panel.portfolios.edit', $portfolio->id));
    }

    public function edit(Portfolio $portfolio)
    {
        return Inertia::render('Portfolios/Form', [
            'item' => $portfolio->append('gallery'),
            'pages' => Page::get(['id', 'title']),
        ]);
    }

    public function update(PortfolioRequest $request, Portfolio $portfolio)
    {
        $data = $request->validated();
        $portfolio->update($data);
        $portfolio->saveAfter($data);

        return back();
    }

    public function destroy(Portfolio $portfolio)
    {
        if (!Auth::user()->is_admin) {
            return back()->withErrors(['У Вас нет прав на удаление']);
        }

        $portfolio->delete();

        return back();
    }
}

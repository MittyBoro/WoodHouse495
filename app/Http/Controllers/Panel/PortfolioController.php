<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\Panel\PortfolioRequest;
use App\Models\Panel\Portfolio;
use App\Models\Panel\Page;
use Illuminate\Http\Request;

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
            'pages' => Page::get(['id', 'title'])
        ]);
    }

    public function create()
    {
        return Inertia::render('Portfolios/Form', [
            'pages' => Page::get(['id', 'title'])
        ]);
    }

    public function store(PortfolioRequest $request)
    {
        $data = $request->validated();
        $created = Portfolio::create($data);

        return redirect(route('panel.portfolios.edit', $created->id));
    }

    public function show(Portfolio $portfolio)
    {
        return redirect()->route('portfolios', $portfolio->slug);
    }

    public function edit(Portfolio $portfolio)
    {
        $portfolio->load(['props']);

        return Inertia::render('Portfolios/Form', [
            'item' => $portfolio,
            'pages' => Page::get(['id', 'title'])
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
        $portfolio->delete();

        return back();
    }
}

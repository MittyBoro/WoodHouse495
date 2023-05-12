<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\Panel\PageRequest;
use App\Models\Panel\Page;
use Illuminate\Http\Request;

use Inertia\Inertia;


class PortfolioController extends Controller
{

    public function index(Request $request)
    {
        $pages = Page::orderByStr($request->get('sort'))
            ->customPaginate($request->get('perPage', 20));

        return Inertia::render('Portfolios/Index', [
            'list' => $pages,
        ]);
    }

    public function create()
    {
        return Inertia::render('Portfolios/Form', [
            'pages' => Page::get(['title', 'id'])
        ]);
    }

    public function store(PageRequest $request)
    {
        $data = $request->validated();
        $created = Page::create($data);

        return redirect(route('panel.portfolios.edit', $created->id));
    }

    public function show(Page $page)
    {
        return redirect()->route('pages', $page->slug);
    }

    public function edit(Page $page)
    {
        $page->load(['props']);

        return Inertia::render('Portfolios/Form', [
            'item' => $page,
        ]);
    }

    public function update(PageRequest $request, Page $page)
    {
        $data = $request->validated();
        $page->update($data);
        $page->saveAfter($data);

        return back();
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return back();
    }
}

<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\Panel\PageRequest;
use App\Models\Panel\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $pages = Page::orderByStr($request->get('sort'))->customPaginate(
            $request->get('perPage', 20),
        );

        return Inertia::render('Pages/Index', [
            'list' => $pages,
        ]);
    }

    public function create()
    {
        return Inertia::render('Pages/Form');
    }

    public function store(PageRequest $request)
    {
        $data = $request->validated();
        $created = Page::create($data);

        return redirect(route('panel.pages.edit', $created->id));
    }

    public function show(Page $page)
    {
        return redirect()->route('pages', $page->slug);
    }

    public function edit(Page $page)
    {
        $page->load(['props']);

        return Inertia::render('Pages/Form', [
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
        if (!Auth::user()->is_admin) {
            return back()->withErrors(['У Вас нет прав на удаление']);
        }

        $page->delete();

        return back();
    }
}

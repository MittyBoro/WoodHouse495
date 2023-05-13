<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\Panel\PropListRequest;
use App\Http\Requests\Panel\PropRequest;
use App\Models\Panel\Page;
use App\Models\Panel\Prop;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PropController extends Controller
{
    public function index()
    {
        return Inertia::render('Props/Index', [
            'item' => [
                'id' => true,
                'props' => Prop::with(['model', 'media'])->get(),
            ],
        ]);
    }

    public function create()
    {
        return Inertia::render('Props/Form', [...$this->editorData()]);
    }

    public function store(PropRequest $request, Prop $prop)
    {
        $data = $request->validated();

        $created = $prop->create($data);

        return redirect(
            route('panel.props.edit', [
                'prop' => $created->id,
            ]),
        );
    }

    public function edit(Prop $prop)
    {
        return Inertia::render('Props/Form', [
            'item' => $prop,

            ...$this->editorData(),
        ]);
    }

    public function update(PropRequest $request, Prop $prop)
    {
        $data = $request->validated();
        $prop->update($data);

        return back();
    }

    public function updateList(PropListRequest $request)
    {
        $data = $request->validated();
        Prop::updateList($data['props']);

        return back();
    }

    public function destroy(Prop $prop)
    {
        $prop->delete();
        return redirect()->route('panel.props.index', ['edit' => true]);
    }

    private function editorData(): array
    {
        return [
            'pages' => Page::get(['id', 'title', 'slug']),
            'types' => Prop::TYPES,
            'tabs' => Prop::tabs(),
        ];
    }
}

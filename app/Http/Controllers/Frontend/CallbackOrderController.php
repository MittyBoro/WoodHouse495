<?php

namespace App\Http\Controllers\Frontend;

use App\Models\CallbackOrder;
use Illuminate\Http\Request;

class CallbackOrderController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'form_name' => 'required|string',
            'name' => 'nullable|string',
            'phone' => 'required|string',
            'description' => 'nullable|string',
            'extra' => 'nullable',
            'files' => 'nullable|array|max:10',
            'files.*' => [
                'file',
                'mimes:doc,docx,pdf,jpg,jpeg,png,gif',
                'max:10000',
            ],
        ]);

        $validated['ip'] = $request->ip();

        $order = CallbackOrder::create($validated);
        $order->saveAfter($validated);

        return true;
    }
}

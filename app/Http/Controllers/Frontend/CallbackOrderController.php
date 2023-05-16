<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\SendCallbackOrder;
use App\Models\CallbackOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CallbackOrderController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'form_name' => 'required|string',
            'name' => 'nullable|string',
            'phone' => 'required|string|phone',
            'description' => 'nullable|string',
            'extra' => 'nullable|array',
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

        $users = User::toNotify()->get();
        if ($users->count()) {
            Mail::to($users)->queue(new SendCallbackOrder($order));
        }

        return true;
    }
}

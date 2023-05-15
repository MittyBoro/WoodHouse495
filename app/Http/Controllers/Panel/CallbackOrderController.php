<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

use App\Models\CallbackOrder;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class CallbackOrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = CallbackOrder::orderByStr($request->get('sort'))
            ->with('media')
            ->customPaginate($request->get('perPage', 20));

        return Inertia::render('CallbackOrders/Index', [
            'list' => $orders,
        ]);
    }

    public function destroy(CallbackOrder $callbackOrder)
    {
        if (!Auth::user()->is_admin) {
            return back()->withErrors(['У Вас нет прав на удаление']);
        }

        $callbackOrder->delete();

        return back();
    }
}

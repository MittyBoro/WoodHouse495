<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

use App\Models\CallbackOrder;
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
}

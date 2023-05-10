<?php

namespace App\Http\Controllers\Panel;

use App\Models\Panel\Product;
use App\Models\Panel\ProductCategory;
use App\Models\Order;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard/Index');
    }
}

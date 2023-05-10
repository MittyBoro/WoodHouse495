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
        return [];
        $data = [
            'products' => [
                'title' => 'Товары',
                'route' => 'panel.products.index',
                'count' => Product::isPublished()->count(),
                'count_month' => Product::month()->isPublished()->count(),
                'count_half_year' => Product::halfYear()->isPublished()->count(),
                'count_year' => Product::year()->isPublished()->count(),
                'count_categories' => ProductCategory::count(),
            ],
            'orders' => [
                'title' => 'Заказы',
                'route' => 'panel.orders.index',
                'count' => Order::week()->count(),
                'count_week' => Order::week()->count(),
                'count_month' => Order::month()->count(),
                'count_half_year' => Order::halfYear()->count(),
                'count_year' => Order::year()->count(),
            ],
        ];

        return Inertia::render('Dashboard/Index', [
            'data' => $data,
        ]);
    }
}

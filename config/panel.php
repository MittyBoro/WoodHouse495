<?php

use App\Models\User;

return [

    'url' => env('APP_URL', 'http://localhost'),

    'path' => env('PANEL_PATH', '@thepanel'),

    'menu' => [
        [
            'name' => 'Главная',
            'route' => 'panel.dashboard',
            'icon' => 'house',
        ],

        [
            'name' => 'Заказы',
            'route' => 'panel.orders.index',
            'icon' => 'cart-shopping',
        ],
        [
            'name' => 'Страницы',
            'route' => 'panel.pages.index',
            'icon' => 'note-sticky',
        ],
        [
            'name' => 'Дополнительно',
            'icon' => 'gear',
            'role_except' => [User::ROLE_EDITOR],
            'route' => 'panel.props.index',
            'sublinks' => [
                [
                    'name' => 'Параметры',
                    'route' => 'panel.props.index',
                ],
                [
                    'name' => 'Пользователи',
                    'route' => 'panel.users.index',
                    'role_except' => [User::ROLE_EDITOR],
                ],
                [
                    'name' => 'Очистить кэш',
                    'route' => 'panel.optimize',
                    'role_except' => [User::ROLE_EDITOR],
                ],
            ],
        ],

    ],
];

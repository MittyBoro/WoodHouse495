<?php

namespace Database\Seeders;

use App\Models\Panel\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class PageSeeder extends Seeder
{
    public function run()
    {
        $pages = $this->getData();

        foreach ($pages as $page) {
            Page::create($page);
        }
    }

    private function getData()
    {
        $pages = [
            'home' => [
                'title' => 'Главная',
                'slug' => 'index',
                'view' => 'index',
            ],
            'sanding' => [
                'title' => 'Шлифовка',
                'slug' => 'sanding',
                'view' => 'sanding',
            ],
            'painting' => [
                'title' => 'Покраска',
                'slug' => 'painting',
                'view' => 'painting',
            ],
            'okosyachka' => [
                'title' => 'Окосячка',
                'slug' => 'okosyachka',
                'view' => 'okosyachka',
            ],
            'roofing' => [
                'title' => 'Кровля',
                'slug' => 'roofing',
                'view' => 'roofing',
            ],
            'reconstruction' => [
                'title' => 'Реконструкция',
                'slug' => 'reconstruction',
                'view' => 'reconstruction',
            ],
            'outbuildings' => [
                'title' => 'Пристройки',
                'slug' => 'outbuildings',
                'view' => 'outbuildings',
            ],
            'planken' => [
                'title' => 'Планкен',
                'slug' => 'planken',
                'view' => 'planken',
            ],
            'articles' => [
                'title' => 'Статьи',
                'slug' => 'articles',
                'view' => 'articles',
            ],
            'article' => [
                'title' => 'Статья',
                'slug' => 'article',
                'view' => 'single-article',
            ],
        ];

        return $pages;
    }
}

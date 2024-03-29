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
            [
                'title' => 'Главная',
                'slug' => 'index',
                'view' => 'index',
            ],
            [
                'title' => 'Шлифовка',
                'slug' => 'sanding',
                'view' => 'sanding',
            ],
            [
                'title' => 'Покраска',
                'slug' => 'painting',
                'view' => 'painting',
            ],
            [
                'title' => 'Окосячка',
                'slug' => 'okosyachka',
                'view' => 'okosyachka',
            ],
            [
                'title' => 'Кровля',
                'slug' => 'roofing',
                'view' => 'roofing',
            ],
            [
                'title' => 'Реконструкция',
                'slug' => 'reconstruction',
                'view' => 'reconstruction',
            ],
            [
                'title' => 'Пристройки',
                'slug' => 'outbuildings',
                'view' => 'outbuildings',
            ],
            [
                'title' => 'Планкен',
                'slug' => 'planken',
                'view' => 'planken',
            ],
            [
                'title' => 'Статьи',
                'slug' => 'articles',
                'view' => 'articles',
            ],
            [
                'title' => 'Одна статья',
                'slug' => 'article',
                'view' => 'single-article',
                'meta_title' => '%replace% | WoodHouse495',
                'meta_description' => '%replace%',
                'meta_keywords' => '%replace%',
            ],
            [
                'title' => 'Политика конфиденциальности',
                'slug' => 'privacy',
            ],
            [
                'title' => 'Договор оферты',
                'slug' => 'offer',
            ],
        ];

        return $pages;
    }
}

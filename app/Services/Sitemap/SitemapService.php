<?php

namespace App\Services\Sitemap;

use App\Models\Article;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;

use App\Models\Page;

class SitemapService
{
    public static function generate()
    {
        $articles = Article::isPublished()->get();

        $pages = Page::whereIn('slug', [
            'sanding',
            'painting',
            'okosyachka',
            'roofing',
            'reconstruction',
            'outbuildings',
            'planken',
            'articles',
        ])->get();

        $sitemap = Sitemap::create()->add(
            Url::create('/')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(1),
        );

        $pages->each(function ($item) use ($sitemap) {
            $sitemap->add(
                Url::create("/{$item->slug}")
                    ->setLastModificationDate($item->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.8),
            );
        });

        $articles->each(function ($item) use ($sitemap) {
            $sitemap->add(
                Url::create("/article/{$item->slug}")
                    ->setLastModificationDate($item->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.6),
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        return response(true);
    }
}

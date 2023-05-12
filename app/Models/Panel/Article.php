<?php

namespace App\Models\Panel;

use App\Models\Article as Model;
use App\Models\Traits\ExtractingTrait;
use Illuminate\Support\Str;
use Nicolaslopezj\Searchable\SearchableTrait;


class Article extends Model
{
    use ExtractingTrait;
    use SearchableTrait;

    protected $sortable = ['title', 'is_published', 'created_at'];

    protected $appends = [
        'thumb'
    ];

    protected $searchable = [
        'columns' => [
            'articles.title' => 3,
            'articles.mini_description' => 2,
            'articles.description' => 2,
            'articles.meta_title' => 1,
            'articles.meta_description' => 1,
            'articles.meta_keywords' => 1,
        ],
    ];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($query) {
            if (empty($query->meta_title)) {
                $query->meta_title = $query->title;
            }

            if (!$query->published_at && $query->is_published) {
                $query->published_at = now();
            }

            $query->slug = Str::slug($query->slug);
        });
    }

    public function getGalleryAttribute()
    {
        return $this->getPanelMedia(self::MEDIA_COLLECTION, 'thumb');
    }

    public function saveAfter($data)
    {
        if (array_key_exists('gallery', $data)) {
            $this->syncMedia($data['gallery'], self::MEDIA_COLLECTION);
        }
    }

    public function scopeFilter($query, array $filter)
    {
        if (array_key_exists('q', $filter)) {
            $query->search($filter['q']);
        }
    }
}

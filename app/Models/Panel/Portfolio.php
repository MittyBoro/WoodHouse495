<?php

namespace App\Models\Panel;

use App\Models\Portfolio as Model;
use App\Models\Traits\ExtractingTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;

use Nicolaslopezj\Searchable\SearchableTrait;

class Portfolio extends Model
{
    use ExtractingTrait;
    use SearchableTrait;

    protected $sortable = [
        'id',
        'created_at',
        'title',
        'is_published',
        'on_home',
    ];
    protected $defaultSort = 'id-desc';

    protected $appends = ['thumb', 'page_name'];

    protected $searchable = [
        'columns' => [
            'portfolios.title' => 3,
            'portfolios.mini_description' => 2,
            'portfolios.description' => 2,
            'portfolios.location' => 1,
        ],
    ];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($query) {
            if (!$query->published_at && $query->is_published) {
                $query->published_at = now();
            }
        });
    }

    public function getMorphClass()
    {
        return Model::class;
    }

    protected function pageName(): Attribute
    {
        return Attribute::make(get: fn() => $this->page?->title);
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
        if (array_key_exists('page_id', $filter)) {
            $query->where('page_id', $filter['page_id']);
        }

        if (array_key_exists('q', $filter)) {
            $query->search($filter['q']);
        }
    }
}

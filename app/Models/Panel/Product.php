<?php

namespace App\Models\Panel;

use App\Models\Product as Model;
use App\Models\Traits\Panel\TranslationTrait;
use App\Models\Traits\DateTrait;

class Product extends Model
{
    use TranslationTrait;
    use DateTrait;


    protected $sortable = ['position', 'id', 'created_at', 'is_published', 'price', 'title'];

    protected $appends = [
        'preview',
    ];

    public function getMorphClass()
    {
        return Model::class;
    }

    public function scopeFilter($query, array $filter, $lang = 'ru')
    {
        if (isset($filter['category'])) {
            $query->relationByIds('categories', $filter['category']);
        }

        if (isset($filter['q'])) {
            $query
                ->where('product_translations.lang', $lang)
                ->search($filter['q']);
        }
    }

    public function scopeLocalized($query, $lang = 'ru', $fullData = false)
    {
        $query->select('products.*');
        $query->addSelect('product_translations.lang');

        parent::scopeLocalized($query, $lang, $fullData);
    }

    public function getGalleryAttribute()
    {
        return $this->getPanelMedia(self::MEDIA_COLLECTION, 'thumb');
    }

    public function getSizeTableAttribute()
    {
        return $this->getPanelMedia(self::MEDIA_COLLECTION_SIZE_TABLE);
    }

    public function saveAfter($data)
    {
        if (array_key_exists('options', $data)) {
            $this->options()->sync($data['options']);
        }
        if (array_key_exists('categories', $data)) {
            $this->categories()->sync($data['categories']);
        }
        if (array_key_exists('translations', $data)) {
            $this->saveTranslations($data['translations']);
        }
        if (array_key_exists('gallery', $data)) {
            $this->syncMedia($data['gallery'], self::MEDIA_COLLECTION);
        }
        if (array_key_exists('size_table', $data)) {
            $this->syncMedia($data['size_table'], self::MEDIA_COLLECTION_SIZE_TABLE);
        }
    }
}

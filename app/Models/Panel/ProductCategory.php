<?php

namespace App\Models\Panel;

use App\Models\ProductCategory as Model;
use App\Models\Traits\Panel\TranslationTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Arr;

class ProductCategory extends Model
{
    use TranslationTrait;

    protected $appends = [
        'title', 'preview'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->position = self::max('position') + 1;
        });

        static::updated(function () {
            static::fixTree();
        });
    }

    protected static function booted()
    {
        static::addGlobalScope('translations', function (Builder $builder) {
            $builder->with('translations');
        });
    }

    public function getMorphClass()
    {
        return Model::class;
    }

    public function getTitleAttribute()
    {
        return $this->translations->first()?->title;
    }

    protected function preview(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->getPanelMedia(self::MEDIA_COLLECTION, 'thumb')
        );
    }

    public function scopeGetList($query)
    {
        $list = $query
            ->withDepth()
            ->get()
            ->toFlatTree();

        return $list;
    }


    public function updateTree($items)
    {
        try {
            collect($items)->each(function ($item, $key) {
                $item = Arr::only($item, ['id', 'parent_id']);
                $item['position'] = $key;

                static::where('id', $item['id'])->update($item);
            });

            static::fixTree();
        } catch (\Throwable $e) {
            return false;
        }

        return true;
    }

    public function saveAfter($data)
    {
        if (array_key_exists('translations', $data)) {
            $this->saveTranslations($data['translations']);
        }
        if (array_key_exists('preview', $data)) {
            $this->syncMedia($data['preview'], self::MEDIA_COLLECTION);
        }
    }
}

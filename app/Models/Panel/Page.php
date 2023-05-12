<?php

namespace App\Models\Panel;

use App\Models\Page as Model;
use App\Models\Traits\RetrievingTrait;


class Page extends Model
{
    use RetrievingTrait;

    protected $sortable = ['slug', 'title'];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($query) {
            if (empty($query->meta_title))
                $query->meta_title = $query->title;
        });
    }

    public function props()
    {
        return $this->morphMany(Prop::class, 'model')->with('media');
    }

    public function getMorphClass()
    {
        return Model::class;
    }

    public function saveAfter($data)
    {
        if (array_key_exists('props', $data)) {
            Prop::updateList($data['props']);
        }
    }
}

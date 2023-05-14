<?php

namespace App\Models\Panel;

use App\Models\Page as Model;
use App\Models\Traits\ExtractingTrait;
use Illuminate\Support\Str;

class Page extends Model
{
    use ExtractingTrait;

    protected $sortable = ['id', 'created_at', 'slug', 'title'];
    protected $defaultSort = 'id-desc';

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($query) {
            if (empty($query->meta_title)) {
                $query->meta_title = $query->title;
            }

            $query->slug = Str::slug($query->slug);
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

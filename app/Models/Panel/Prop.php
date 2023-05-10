<?php

namespace App\Models\Panel;

use App\Models\Prop as Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class Prop extends Model
{

    protected $sortable = ['position'];


    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->position = self::max('position') + 1;
        });

        static::saving(function ($model) {
            if (!$model->model_id) {
                $model->model_type = null;
            } elseif (!$model->model_type) {
                $model->model_id = null;
            }

            if ($model->model_id) {
                $model->tab = null;
            }

            if (!$model->tab) {
                $model->tab = self::DEFAULT_TAB;
            }

            Cache::forget('view_props');
        });
    }

    protected static function booted()
    {
        static::addGlobalScope('ordered', function ($builder) {
            $builder->orderBy('model_id');
            $builder->orderBy('position');
        });
    }

    public function getMorphClass()
    {
        return Model::class;
    }

    protected function modelTypeKey(): Attribute
    {
        return Attribute::make(
            get: fn () => array_search($this->model_type, self::MODELS) ?: null,
            set: fn ($value) => [
                'model_type' => self::MODELS[$value] ?? null
            ],
        );
    }

    protected function value(): Attribute
    {
        $type = $this->attributes['type'];
        switch ($type) {
            case 'string':
                return Attribute::make(get: fn () => ['string' => $this->value_string]);
            case 'file':
            case 'files':
                return Attribute::make(get: fn () => ['files' => $this->getPanelMedia(self::MEDIA_COLLECTION_FILE)]);
            case 'image':
            case 'images':
                return Attribute::make(get: fn () => ['images' => $this->getPanelMedia(self::MEDIA_COLLECTION_IMAGE)]);
            case 'text_array':
                return Attribute::make(get: fn () => ['text_array' => $this->text_array]);
            default:
                return Attribute::make(get: fn () => ['text' => $this->value_text]);
        }
    }

    public function getTabAttribute($value)
    {
        $model = $this->model;
        if ($model)
            return $model->title . ($model->lang ? "[$model->lang]" : "");

        return $value;
    }

    // syncMedia несработает при создании
    public function setValueAttribute($value)
    {
        if (!is_array($value))
            return;

        $type = $this->attributes['type'];

        switch ($type) {
            case 'file':
            case 'files':
                $this->syncMedia($value['files'] ?? null, self::MEDIA_COLLECTION_FILE);
                break;
            case 'image':
            case 'images':
                $this->syncMedia($value['images'] ?? null, self::MEDIA_COLLECTION_IMAGE);
                break;
            case 'string':
            case 'boolean':
                $this->attributes['value_string'] = $value['string'] ?? null;
                break;
            case 'text_array':
                $this->attributes['value_text'] = json_encode($value['text_array'] ?? null);
                break;
            default:
                $this->attributes['value_text'] = $value['text'] ?? null;
        }
    }

    public function setKeyAttribute($value)
    {
        $this->attributes['key'] = Str::slug($value, '_');
    }

    public static function tabs()
    {
        $tabs = self::select('tab')
            ->withoutGlobalScope('ordered')
            ->whereNotNull('tab')
            ->whereNull('model_id')
            ->groupBy('tab')
            ->pluck('tab')
            ->prepend(self::DEFAULT_TAB)
            ->unique();
        return $tabs;
    }

    public static function updateList($data)
    {
        $res = collect($data)->map(function ($item) {
            $prop = self::find($item['id']);
            $prop->update($item);

            return $prop->id;
        });

        return $res;
    }
}

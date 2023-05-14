<?php

namespace App\Models;

use App\Models\Traits\ExtractingTrait;
use App\Services\SpatieMedia\InteractsWithCustomMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;

class CallbackOrder extends Model implements HasMedia
{
    use InteractsWithCustomMedia;
    use ExtractingTrait;
    use HasFactory;

    const MEDIA_COLLECTION = 'callback_order';

    protected $fillable = [
        'form_name',
        'name',
        'phone',
        'description',
        'extra',
        'ip',
    ];

    protected $sortable = ['created_at'];
    protected $defaultSort = 'created_at-desc';

    protected $appends = ['files'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection(self::MEDIA_COLLECTION)->onlyKeepLatest(10);
    }

    public function saveAfter($data)
    {
        if (array_key_exists('files', $data)) {
            $this->syncMedia($data['files'], self::MEDIA_COLLECTION);
        }
    }

    public function getFilesAttribute()
    {
        return $this->getMediaUrls(self::MEDIA_COLLECTION);
    }
}

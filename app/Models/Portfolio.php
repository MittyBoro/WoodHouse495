<?php

namespace App\Models;

use App\Models\Traits\ExtractingTrait;
use App\Services\SpatieMedia\InteractsWithCustomMedia;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;

class Portfolio extends Model implements HasMedia
{
    use HasFactory;
    use ExtractingTrait;
    use InteractsWithCustomMedia;

    const MEDIA_COLLECTION = 'portfolio';

    protected $fillable = [
        'page_id',

        'title',
        'mini_description',
        'description',
        'location',

        'on_home',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean',
        'on_home' => 'boolean',
    ];

    protected $sortable = ['published_at', 'created_at'];
    protected $defaultSort = 'published_at-desc';

    protected $appends = ['thumb', 'gallery'];

    protected $hidden = ['media'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection(
            self::MEDIA_COLLECTION,
        )->registerMediaConversions(function () {
            $this->addMediaConversion('thumb')->fit(
                Manipulations::FIT_MAX,
                400,
                400,
            );
            $this->addMediaConversion('medium')->fit(
                Manipulations::FIT_MAX,
                700,
                700,
            );
            $this->addMediaConversion('big')->fit(
                Manipulations::FIT_MAX,
                1500,
                1500,
            );
        });
    }

    public function mediaCollectionsWithDeletingOriginal(): array
    {
        return [self::MEDIA_COLLECTION];
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function getGalleryAttribute()
    {
        return $this->getMediaUrlsConversions(self::MEDIA_COLLECTION, [
            'thumb',
            'medium',
            'big',
        ]);
    }

    // запрос не дублируется
    protected function thumb(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->getFirstMediaUrl(
                self::MEDIA_COLLECTION,
                'thumb',
            ),
        );
    }

    public function scopeOnHome($query)
    {
        $query->where('on_home', 1);
    }

    public function scopeIsPublished($query)
    {
        $query->where('is_published', 1);
    }

    public function scopeQueryList($query)
    {
        $query
            ->orderByStr()
            ->isPublished()
            ->with('media')
            ->select(
                'id',
                'page_id',
                'title',
                'mini_description',
                'location',
                'description',
            );
    }
}

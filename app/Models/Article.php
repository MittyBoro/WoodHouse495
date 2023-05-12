<?php

namespace App\Models;

use App\Services\SpatieMedia\InteractsWithCustomMedia;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;

class Article extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithCustomMedia;

    const MEDIA_COLLECTION = 'article';

    protected $fillable = [
        'slug',

        'title',
        'mini_description',
        'description',

        'meta_title',
        'meta_description',
        'meta_keywords',

        'is_published',
        'published_at',
    ];

    protected $sortable = ['published_at', 'created_at'];
    protected $hidden = ['media'];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection(self::MEDIA_COLLECTION)
            ->registerMediaConversions(function () {
                $this
                    ->addMediaConversion('thumb')
                    ->fit(Manipulations::FIT_CROP, 394, 525);
                $this
                    ->addMediaConversion('medium')
                    ->fit(Manipulations::FIT_MAX, 700, 700);
                $this
                    ->addMediaConversion('big')
                    ->fit(Manipulations::FIT_MAX, 1500, 1500);
            });
    }

    public function mediaCollectionsWithDeletingOriginal(): array
    {
        return [
            self::MEDIA_COLLECTION,
        ];
    }

    public function page()
    {
        return $this->hasOne(Page::class);
    }

    public function getGalleryAttribute()
    {
        $gallery = $this->getMediaUrlsConversions(self::MEDIA_COLLECTION, ['thumb', 'medium', 'big']);

        if ($gallery->count()) {
            return $gallery;
        }

        return collect([[
            'thumb' => '',
            'medium' => '',
            'big' => '',
        ]]);
    }

    // запрос не дублируется
    protected function thumb(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->getFirstMediaUrl(self::MEDIA_COLLECTION, 'thumb')
        );
    }

    protected function similars(): Attribute
    {
        return Attribute::make(get: function () {

            // $result = self::limit(4)
            //             ->where('products.id', '!=', $this->id)
            //             ->getFrontList();

            // $result->append(['gallery']);
            // return $result;
        });
    }

    public function scopeIsPublished($query)
    {
        $query->where('is_published', 1);
    }

    public function scopeGetFrontList($query, $paginate = true, $append = 'gallery')
    {
        $query
            ->isPublished()
            ->with('media');

        if ($paginate) {
            $result = $query->customPaginate(6, $append);
        } else {
            $result = $query->get();
            $result->append($append);
        }

        return $result;
    }

    // single
    public function scopeFrontBySlug($query, $slug)
    {
        $result = $query
            ->isPublished()
            ->whereSlug($slug)
            ->with(['media', 'options'])
            ->firstOrFail();

        $result->append(['gallery', 'similars']);
        $result->makeHidden(['options']);

        return $result;
    }
}

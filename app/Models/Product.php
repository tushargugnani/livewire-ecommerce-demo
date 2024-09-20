<?php

namespace App\Models;

use Spatie\Tags\HasTags;
use EloquentFilter\Filterable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements HasMedia, Searchable
{
    use HasFactory;
    use InteractsWithMedia;
    use Filterable;
    use HasTags;

    // Model
    protected $casts = [
        'meta' => 'array',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main')->singleFile();
    }

    public function getSearchResult(): SearchResult
    {
        return new SearchResult(
            $this,
            $this->title,
            $this->link
        );
    }

    public function scopeFilterPrice(Builder $query, $operator, $price)
    {
        return $query->where('price', $operator, $price);
    }
}
<?php

namespace App\Models;

use App\Services\MultiModelSearchService;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Message extends Model
{
    use HasFactory ,Searchable;

    protected $guarded = ['id'];

    protected $casts = [
        'status' => 'string',
    ];

    protected $searchOptions = [
        'query_by' => 'name'
    ];

    public function toSearchableArray()
    {
        return array_merge($this->toArray(), [
            'id' => (string) $this->id,
            'created_at' => $this->created_at,
        ]);
    }

    protected function Status():Attribute
    {
        return Attribute::make(
            get: fn(int $value) => $value === 1 ? 'read': 'unread'
        );
    }

    protected function createdAt():Attribute
    {
        return Attribute::make(
            get: fn(string $value) => Carbon::parse($value)->diffForHumans()
        );
    }

    protected function updatedAt():Attribute
    {
        return Attribute::make(
            get: fn(string $value) => Carbon::parse($value)->diffForHumans()
        );
    }

    public function scopeForage(Builder $query,string $term){

        return MultiModelSearchService::search(__CLASS__,$term,$this->searchOptions);
    }



}

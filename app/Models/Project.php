<?php

namespace App\Models;

use App\Services\MultiModelSearchService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Project extends Model
{
    use HasFactory ,Searchable;

    protected $guarded = ['id'];

    protected $searchOptions = [
        'query_by' => 'name'
    ];

    public function category(){

        return $this->belongsTo(Category::class);

    }

    public function toSearchableArray()
    {
        return array_merge($this->toArray(), [
            'id' => (string) $this->id,
            'created_at' => $this->created_at->timestamp,
        ]);
    }

    public function scopeForage(Builder $query,string $term){

        return MultiModelSearchService::search(__CLASS__,$term,$this->searchOptions);
    }
}

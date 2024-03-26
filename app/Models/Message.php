<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Message extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'status' => 'string',
    ];

    public function scopeSearch(Builder $query,string $term){
        return $query->where('name' , 'like','%' . $term . '%');
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

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeSearch(Builder $query,string $term){
        return $query->where('email' , 'like','%' . $term . '%');
    }
}

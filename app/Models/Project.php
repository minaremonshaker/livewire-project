<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category(){

        return $this->belongsTo(Category::class);

    }

    public function scopeSearch(Builder $query,string $term){

        return $query->where('name' , 'like','%' . $term . '%');
        
    }
}

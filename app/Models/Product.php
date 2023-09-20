<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory, Sluggable;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
            ];
    }

    function category()
    {
        return $this->belongTo(Category::class);
    }


    public function reviews()
{
    return $this->hasMany(ProductReview::class);
}
}

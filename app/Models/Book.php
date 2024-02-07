<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Book extends Model
{
    use Sluggable;

    protected $fillable = [
        'title',
        'image',
        'body',
        'category_id',
        'stok',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}

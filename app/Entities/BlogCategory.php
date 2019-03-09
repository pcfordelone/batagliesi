<?php

namespace FRD\Entities;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'status',
        'description',
    ];

    public function blog_posts()
    {
        return $this->hasMany(BlogPost::class);
    }
}

<?php

namespace FRD\Entities;

use Illuminate\Database\Eloquent\Model;

class BlogPostImage extends Model
{
    protected $fillable = [
        'title',
        'alt',
        'url',
        'blog_post_id'
    ];

    public function blog_post()
    {
        return $this->belongsTo(BlogPost::class);
    }
}

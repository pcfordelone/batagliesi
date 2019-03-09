<?php

namespace FRD\Entities;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'caption',
        'featured',
        'status',
        'author',
        'description',
        'keywords',
        'html_content',
        'default_img',
        'blog_category_id'
    ];

    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function blog_post_images()
    {
        return $this->hasMany(BlogPostImage::class);
    }
}

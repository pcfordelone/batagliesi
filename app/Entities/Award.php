<?php

namespace FRD\Entities;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $fillable = [
        'status',
        'name',
        'slug',
        'default_img',
        'keywords',
        'description',
        'content',
    ];

    public function award_images()
    {
        return $this->hasMany(AwardImage::class);
    }
}

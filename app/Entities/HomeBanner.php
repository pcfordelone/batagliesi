<?php

namespace FRD\Entities;

use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
    protected $fillable = [
        'status',
        'link',
        'url',
        'title',
        'alt',
        'order'
    ];
}

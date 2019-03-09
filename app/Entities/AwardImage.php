<?php

namespace FRD\Entities;

use Illuminate\Database\Eloquent\Model;

class AwardImage extends Model
{
    protected $fillable = [
        'title',
        'alt',
        'url',
        'award_id'
    ];

    public function award()
    {
        return $this->belongsTo(Award::class);
    }
}

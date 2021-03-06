<?php

namespace FRD\Entities;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'status',
        'name',
        'slug',
        'default_img',
        'cover_img',
        'keywords',
        'description',
        'content',
        'project_category_id',
        'client',
        'project_date'
    ];

    public function project_category()
    {
        return $this->belongsTo(ProjectCategory::class);
    }

    public function project_tags()
    {
        return $this->belongsToMany(ProjectTag::class);
    }

    public function project_images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function getTagListAttribute()
    {
        $tags = $this->project_tags->lists('name')->toArray();

        return implode(',', $tags);
    }
}

<?php

namespace FRD\Entities;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $fillable = [
        'title',
        'alt',
        'url',
        'project_id'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}

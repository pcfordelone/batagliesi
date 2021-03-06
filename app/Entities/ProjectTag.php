<?php

namespace FRD\Entities;

use Illuminate\Database\Eloquent\Model;

class ProjectTag extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    public function project_categories()
    {
        return $this->belongsToMany(ProjectCategory::class);
    }
}

<?php

namespace FRD\Entities;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    protected $fillable = [
        'status',
        'name',
        'slug',
        'description',
        'color'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}

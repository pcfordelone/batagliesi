<?php


namespace FRD\Repositories;


use FRD\Entities\ProjectCategory;
use FRD\Interfaces\ProjectCategoryRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class ProjectCategoryRepositoryEloquent extends BaseRepository implements ProjectCategoryRepository
{
    public function model()
    {
        return ProjectCategory::class;
    }

}
<?php


namespace FRD\Repositories;


use FRD\Entities\BlogCategory;
use FRD\Interfaces\BlogCategoryRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class BlogCategoryRepositoryEloquent extends BaseRepository implements BlogCategoryRepository
{
    public function model()
    {
        return BlogCategory::class;
    }

}
<?php


namespace FRD\Repositories;


use FRD\Entities\ProjectImage;
use FRD\Interfaces\ProjectImageRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class ProjectImageRepositoryEloquent extends BaseRepository implements ProjectImageRepository
{
    public function model()
    {
        return ProjectImage::class;
    }

}
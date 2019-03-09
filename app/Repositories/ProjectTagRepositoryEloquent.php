<?php


namespace FRD\Repositories;


use FRD\Entities\ProjectTag;
use FRD\Interfaces\ProjectTagRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class ProjectTagRepositoryEloquent extends BaseRepository implements ProjectTagRepository
{
    public function model()
    {
        return ProjectTag::class;
    }

}
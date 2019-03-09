<?php


namespace FRD\Repositories;


use FRD\Entities\Project;
use FRD\Interfaces\ProjectRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class ProjectRepositoryEloquent extends BaseRepository implements ProjectRepository
{
    public function model()
    {
        return Project::class;
    }

}
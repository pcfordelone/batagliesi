<?php


namespace FRD\Repositories;


use FRD\Entities\Award;
use FRD\Interfaces\AwardRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class AwardRepositoryEloquent extends BaseRepository implements AwardRepository
{
    public function model()
    {
        return Award::class;
    }

}
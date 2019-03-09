<?php


namespace FRD\Repositories;


use FRD\Entities\AwardImage;
use FRD\Interfaces\AwardImageRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class AwardImageRepositoryEloquent extends BaseRepository implements AwardImageRepository
{
    public function model()
    {
        return AwardImage::class;
    }

}
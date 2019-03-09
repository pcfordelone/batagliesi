<?php


namespace FRD\Repositories;


use FRD\Entities\HomeBanner;
use FRD\Interfaces\HomeBannerRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class HomeBannerRepositoryEloquent extends BaseRepository implements HomeBannerRepository
{
    public function model()
    {
        return HomeBanner::class;
    }

}
<?php


namespace FRD\Repositories;


use FRD\Entities\BlogPostImage;
use FRD\Interfaces\BlogPostImageRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class BlogPostImageRepositoryEloquent extends BaseRepository implements BlogPostImageRepository
{
    public function model()
    {
        return BlogPostImage::class;
    }

}
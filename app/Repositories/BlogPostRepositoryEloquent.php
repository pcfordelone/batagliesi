<?php


namespace FRD\Repositories;


use FRD\Entities\BlogPost;
use FRD\Interfaces\BlogPostRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class BlogPostRepositoryEloquent extends BaseRepository implements BlogPostRepository
{
    public function model()
    {
        return BlogPost::class;
    }
}
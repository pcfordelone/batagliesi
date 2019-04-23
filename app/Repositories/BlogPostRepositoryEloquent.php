<?php


namespace FRD\Repositories;


use FRD\Entities\BlogPost;
use FRD\Interfaces\BlogPostRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class BlogPostRepositoryEloquent extends BaseRepository implements BlogPostRepository
{
    protected $fieldSearchable = [
        'title' => 'like',
        'author' => 'like',
        'keywords' => 'like',
        'description' => 'like',
        'html_content' => 'like',
        'caption' => 'like',

        /* Relations */
        'blog_category.name' => 'like',
    ];

    public function boot(){
        $this->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
    }

    public function model()
    {
        return BlogPost::class;
    }
}
<?php

namespace FRD\Http\Controllers\Site;

use FRD\Entities\BlogPost;
use FRD\Interfaces\BlogCategoryRepository;
use FRD\Interfaces\BlogPostRepository;
use Illuminate\Http\Request;

use FRD\Http\Requests;
use FRD\Http\Controllers\Controller;

class BlogController extends Controller
{
    private $blog_category_repository;
    private $blog_post_repository;
    private $blog_post_model;

    public function __construct(BlogCategoryRepository $blogCategoryRepository, BlogPostRepository $blogPostRepository, BlogPost $blogPost)
    {
        $this->blog_category_repository = $blogCategoryRepository;
        $this->blog_post_repository = $blogPostRepository;
        $this->blog_post_model = $blogPost;
    }

    public function index()
    {
        $categories = $this->blog_category_repository->findWhere(['status' => 1]);
        $posts = $this->blog_post_model->orderBy('created_at', 'desc')->where('status', 1)->paginate(10);

        return view('site.blog.index', compact('categories', 'posts'));
    }

    public function category($slug)
    {
        $categories = $this->blog_category_repository->findWhere(['status' => 1]);
        $posts = $this->blog_category_repository->findWhere(['slug' => $slug])->first()->blog_posts()->where('status', 1)->paginate(10);

        return view('site.blog.category',compact('categories', 'posts'));
    }

    public function post($slug)
    {
        $categories = $this->blog_category_repository->findWhere(['status' => 1]);
        $posts = $this->blog_post_model->orderBy('created_at', 'desc')->where('status', 1)->paginate(10);
        $data = $this->blog_post_repository->findWhere(['slug' => $slug])->first();

        return view('site.blog.post', compact('categories', 'data', 'posts'));
    }

    public function search()
    {
        $categories = $this->blog_category_repository->findWhere(['status' => 1]);
        $posts = $this->blog_post_repository->paginate(10);

        return view('site.blog.search', compact('categories', 'posts'));
    }
}

<?php

namespace FRD\Http\Controllers\Site;

use FRD\Interfaces\BlogPostRepository;
use FRD\Interfaces\HomeBannerRepository;
use FRD\Interfaces\ProjectRepository;
use Illuminate\Http\Request;

use FRD\Http\Requests;
use FRD\Http\Controllers\Controller;

class MainController extends Controller
{
    private $blog_post_repository;
    private $home_banner_repository;

    public function __construct(BlogPostRepository $blogPostRepository, HomeBannerRepository $homeBannerRepository)
    {
        $this->blog_post_repository = $blogPostRepository;
        $this->home_banner_repository = $homeBannerRepository;
    }

    public function index()
    {
        $posts = $this->blog_post_repository->orderBy('created_at', 'desc')->findWhere(['status' => 1, 'featured' => 1]);
        $banners = $this->home_banner_repository->orderBy('order', 'asc')->findWhere(['status' => 1]);

        return view('site.index', compact('posts', 'banners'));
    }

    public function about()
    {
        return view('site.about');
    }

    public function projects_index(ProjectRepository $projectRepository)
    {

        return view('site.projects.index');
    }

    public function projects_detail()
    {
        return view('site.projects.detail');
    }

    public function contact()
    {
        return view('site.contact');
    }
}

<?php

namespace FRD\Http\Controllers\Site;

use FRD\Interfaces\ProjectCategoryRepository;
use FRD\Interfaces\ProjectRepository;
use Illuminate\Http\Request;

use FRD\Http\Requests;
use FRD\Http\Controllers\Controller;

class ProjectController extends Controller
{
    private $repository;
    private $project_category_repository;

    public function __construct(ProjectRepository $repository, ProjectCategoryRepository $project_category_repository)
    {
        $this->repository = $repository;
        $this->project_category_repository = $project_category_repository;
    }

    public function index($slug)
    {
        $category = $this->project_category_repository->findWhere(['slug' => $slug])->first();
        $data = $category->projects()->where('status', 1)->get();

        return view('site.projects.category', compact('data', 'category'));
    }

    public function detail($slug)
    {
        $data = $this->repository->findWhere(['slug' => $slug])->first();

        return view('site.projects.detail', compact('data'));
    }
}

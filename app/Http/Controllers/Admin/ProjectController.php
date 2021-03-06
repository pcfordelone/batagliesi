<?php

namespace FRD\Http\Controllers\Admin;

use FRD\Interfaces\ProjectCategoryRepository;
use FRD\Interfaces\ProjectRepository;
use FRD\Interfaces\ProjectService;
use FRD\Interfaces\ProjectTagRepository;
use Illuminate\Http\Request;

use FRD\Http\Requests;
use FRD\Http\Controllers\Controller;

class ProjectController extends Controller
{
    private $repository;
    private $service;
    private $project_category_repository;
    private $project_tag_repository;

    public function __construct(ProjectRepository $repository, ProjectService $service, ProjectCategoryRepository $project_category_repository, ProjectTagRepository $projectTagRepository)
    {
        $this->repository = $repository;
        $this->service = $service;
        $this->project_category_repository = $project_category_repository;
        $this->project_tag_repository = $projectTagRepository;
    }

    public function index()
    {
        $data = $this->repository->all();

        return view('admin.projects.index', compact('data'));
    }

    public function create()
    {
        $categories = $this->project_category_repository->lists('name', 'id')->toArray();
        $tags = $this->project_tag_repository->all();

        return view('admin.projects.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $this->service->store($request->all());

        return redirect()->route('admin.projects.index');
    }

    public function edit($id)
    {
        $data = $this->repository->find($id);
        $categories = $this->project_category_repository->lists('name', 'id')->toArray();
        $tags = $this->project_tag_repository->all();

        return view('admin.projects.edit', compact('data', 'categories', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $this->service->update($request->all(), $id);

        return redirect()->route('admin.projects.index');
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return redirect()->route('admin.projects.index');
    }

    public function changeStatus()
    {
        $this->service->changeStatus($_GET['item'], $_GET['element']);

        return redirect()->route('admin.projects.index');
    }

    public function rm_photo($model_id, $photo_id)
    {
        $this->service->rm_photo($photo_id);

        return redirect()->route('admin.projects.edit', ['id' => $model_id]);
    }
}

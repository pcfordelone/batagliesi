<?php

namespace FRD\Http\Controllers\Admin;

use FRD\Interfaces\BlogCategoryRepository;
use FRD\Interfaces\BlogPostRepository;
use FRD\Interfaces\BlogPostService;
use Illuminate\Http\Request;

use FRD\Http\Requests;
use FRD\Http\Controllers\Controller;

class BlogPostController extends Controller
{
    private $repository;
    private $service;
    private $blog_category_repository;

    public function __construct(BlogPostRepository $repository, BlogPostService $service, BlogCategoryRepository $blogCategoryRepository)
    {
        $this->repository = $repository;
        $this->service = $service;
        $this->blog_category_repository = $blogCategoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->repository->all();

        return view('admin.blog.posts.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->blog_category_repository->lists('name', 'id')->toArray();

        return view('admin.blog.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->service->store($request->all());

        return redirect()->route('admin.blog.posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->repository->find($id);
        $categories = $this->blog_category_repository->lists('name', 'id')->toArray();

        return view('admin.blog.posts.edit', compact('data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->service->update($request->all(), $id);

        return redirect()->route('admin.blog.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->service->delete($id);

        return redirect()->route('admin.blog.posts.index');
    }

    public function changeStatus()
    {
        $this->service->changeStatus($_GET['item'], $_GET['element']);

        return redirect()->route('admin.blog.posts.index');
    }

    public function rm_photo($model_id, $photo_id)
    {
        $this->service->rm_photo($photo_id);

        return redirect()->route('admin.blog.posts.edit', ['id' => $model_id]);
    }
}

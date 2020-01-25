<?php

namespace FRD\Http\Controllers\Admin;

use FRD\Interfaces\AwardRepository;
use FRD\Interfaces\AwardService;
use Illuminate\Http\Request;

use FRD\Http\Requests;
use FRD\Http\Controllers\Controller;

class AwardController extends Controller
{
    private $repository;
    private $service;

    public function __construct(AwardRepository $repository, AwardService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->repository->all();

        return view('admin.awards.index', compact('data'));
    }

    public function create()
    {
        return view('admin.awards.create');
    }

    public function store(Request $request)
    {
        $this->service->store($request->all());

        return redirect()->route('admin.awards.index');
    }

    public function edit($id)
    {
        $data = $this->repository->find($id);

        return view('admin.awards.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->service->update($request->all(), $id);

        return redirect()->route('admin.awards.index');
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return redirect()->route('admin.awards.index');
    }

    public function changeStatus()
    {
        $this->service->changeStatus($_GET['item'], $_GET['element']);

        return redirect()->route('admin.awards.index');
    }

    public function rm_photo($model_id, $photo_id)
    {
        $this->service->rm_photo($photo_id);

        return redirect()->route('admin.awards.edit', ['id' => $model_id]);
    }
}

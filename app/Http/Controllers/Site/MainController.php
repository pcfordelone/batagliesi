<?php

namespace FRD\Http\Controllers\Site;

use FRD\Interfaces\ProjectRepository;
use Illuminate\Http\Request;

use FRD\Http\Requests;
use FRD\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function about()
    {
        return view('site.about');
    }

    public function projects_index()
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

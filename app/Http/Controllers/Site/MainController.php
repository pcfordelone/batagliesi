<?php

namespace FRD\Http\Controllers\Site;

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
}

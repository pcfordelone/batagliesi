<?php

namespace FRD\Http\Controllers\Admin;

use Illuminate\Http\Request;

use FRD\Http\Requests;
use FRD\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}

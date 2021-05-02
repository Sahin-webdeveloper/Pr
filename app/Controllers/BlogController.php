<?php

namespace App\Controllers;

class BlogController extends BaseController
{
    public function index()
    {
        return view('blogs/index');
    }

    public function detail($id)
    {
        return view('blogs/detail');
    }
}
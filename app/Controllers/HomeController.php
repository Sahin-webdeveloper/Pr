<?php

namespace App\Controllers;

use App\Models\MainSlider;

class HomeController extends BaseController
{
	public function index()
	{
	    $sliders = new MainSlider();
        $data = $sliders->findAll();

		return view('home', ['sliders' => $data]);
	}

	public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}

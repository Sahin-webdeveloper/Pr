<?php

namespace App\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioCategory;

class PortfolioController extends BaseController
{
    public function index()
    {
        $portfolioCategories = (new PortfolioCategory())->findAll();
        $portfolios = (new Portfolio())->findAll();

        return view('portfolios', compact('portfolios', 'portfolioCategories'));
    }
}
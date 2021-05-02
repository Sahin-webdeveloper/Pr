<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PortfolioCategory;
use CodeIgniter\Model;

class PortfolioCategoryController extends BaseController
{
    public function index()
    {
        $categories = (new PortfolioCategory())->findAll();

        return view('admin/portfolios/categories', compact('categories'));
    }

    public function create()
    {
        return view('admin/portfolios/categoryCreateOrUpdate');
    }

    public function insert()
    {
        $data = $this->request->getPost();

        (new PortfolioCategory())->insert($data);

        return redirect()->route('admin.portfolio_category');
    }

    public function edit($id)
    {
        $category = (new PortfolioCategory())->find($id);

        return view('admin/portfolios/categoryCreateOrUpdate', compact('category'));
    }

    public function update($id)
    {
        $data = $this->request->getPost();

        $category = (new PortfolioCategory())->find($id);

        if (isset($data['title'])) {
            $category['title'] = $data['title'];
        }

        (new PortfolioCategory())->update($id, $category);

        return redirect()->route('admin.portfolio_category');
    }

    public function delete($id)
    {
        (new PortfolioCategory())->delete($id);

        return redirect()->route('admin.portfolio_category');
    }
}
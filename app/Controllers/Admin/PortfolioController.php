<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use CodeIgniter\Model;

class PortfolioController extends BaseController
{
    private function model()
    {
        return new Portfolio();
    }

    public function index()
    {
        $portfolios = $this->model()->findAll();

        return view('admin/portfolios/index', compact('portfolios'));
    }

    public function create()
    {
        $categories = (new PortfolioCategory())->findAll();

        return view('admin/portfolios/createOrUpdate', compact('categories'));
    }

    public function insert()
    {
        $data = $this->request->getPost();

        if ($imageFile = $this->request->getFiles()) {
            foreach ($imageFile as $image) {
                $newName = $image->getRandomName();

                $data['path'] = 'uploads/portfolios/' . $newName;

                $image->move(ROOTPATH . '/public/uploads/portfolios', $newName);
            }
        }

        $this->model()->insert($data);

        return redirect()->route('admin.portfolio');
    }

    public function edit(int $id)
    {
        $portfolio = $this->model()->find($id);

        $categories = (new PortfolioCategory())->findAll();

        return view('admin/portfolios/createOrUpdate', compact('categories', 'portfolio'));
    }

    public function delete(int $id)
    {
        $this->model()->delete($id);

        return redirect()->route('admin.portfolio');
    }
}
<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Category;

class CategoryController extends BaseController
{
    public function model()
    {
        return new Category();
    }

    public function index()
    {
        $categories = $this->model()->findAll();

        return view('admin/categories/index', compact('categories'));
    }

    public function create()
    {
        return view('admin/categories/create');
    }

    public function insert()
    {
        $data = $this->request->getPost();

        $this->model()->insert($data);

        return redirect()->to('/admin/category');
    }

    public function edit($id)
    {
        $category = $this->model()->find($id);

        return view('admin/categories/edit', compact('category'));
    }

    public function update($id)
    {
        $data = $this->request->getPost();

        $category = $this->model()->find($id);

        if (isset($data['title'])) {
            $category['title'] = $data['title'];
        }
        if (isset($data['slug'])) {
            $category['slug'] = $data['slug'];
        }

        $this->model()->update($id, $category);

        return redirect()->to('/admin/category');
    }

    public function delete($id)
    {
        $this->model()->delete($id);

        return redirect()->to('/admin/category');
    }
}
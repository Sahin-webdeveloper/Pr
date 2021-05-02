<?php

namespace App\Controllers;

use App\Models\Service;
use CodeIgniter\Model;

class ServiceController extends BaseController
{
    public function index()
    {
        $services = (new Service())->relatedQuery()->findAll();

        $services = (new Service())->compileData($services);

        return view('services/index', ['services' => $services]);
    }

    public function detail($id)
    {
        $query = (new Service())->relatedQuery()->where('services.id', $id);

        $service = $query->compileData($query->findAll());

        return view('services/detail', ['service' => $service[$id]]);
    }
}
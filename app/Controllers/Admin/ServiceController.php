<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Service;
use App\Models\ServiceGallery;
use App\Models\ServiceGalleryImage;
use App\Models\ServiceIntroduction;
use CodeIgniter\Model;

class ServiceController extends BaseController
{
    public function index()
    {
        $services = (new Service())->relatedQuery()->findAll();

        $data = (new Service())->compileData($services);

        return view('admin/services/index', ['services' => $data]);
    }

    public function create()
    {
        return view('admin/services/createOrUpdate');
    }

    public function insert()
    {
        $data = $this->request->getPost();

        (new Service())->insert($data);

        $serviceId = (new Service())->db->insertID();

        if (isset($data['introductions']) && $data['introductions']) {
            foreach ($data['introductions'] as $introduction) {
                $introduction['service_id'] = $serviceId;

                (new ServiceIntroduction())->insert($introduction);
            }
        }
        if (isset($data['gallery']) && $data['gallery']) {

            (new ServiceGallery())->insert(
                [
                    'service_id' => $serviceId,
                    'description' => $data['gallery']['description'] ?? ''
                ]
            );

            $serviceGalleryId = (new ServiceGallery())->db->insertID();

            if($imageFile = $this->request->getFiles()) {
                foreach($imageFile['gallery']['images'] as $img) {
                    if ($img->isValid() && ! $img->hasMoved()) {
                        $newName = $img->getRandomName();

                        $img->move(ROOTPATH . '/public/uploads/gallery', $newName);

                        (new ServiceGalleryImage())->insert([
                            'service_gallery_id' => $serviceGalleryId,
                            'path' => "uploads/gallery/$newName"
                        ]);
                    }
                }
            }
        }

        return redirect()->route('admin.service');
    }

    public function edit(int $id)
    {
        $services = (new Service())->relatedQuery()->where('services.id', $id)->findAll();

        $data = (new Service())->compileData($services);

        return view('admin/services/createOrUpdate', ['service' => $data[$id] ?? null]);
    }

    public function update(int $id)
    {
        $data = $this->request->getPost();

        $service = (new Service())->find($id);

        if (isset($data['title'])) {
            $service['title'] = $data['title'];
        }
        if (isset($data['description'])) {
            $service['description'] = $data['description'];
        }

        (new Service())->update($id, $service);

        return redirect()->route('admin.service');
    }

    public function delete(int $id)
    {
        (new ServiceGallery())->where('service_id', $id)->delete();
        (new ServiceIntroduction())->where('service_id', $id)->delete();

        (new Service())->delete($id);

        return redirect()->route('admin.service');
    }
}
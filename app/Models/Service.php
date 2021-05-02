<?php

namespace App\Models;

use CodeIgniter\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $allowedFields = ['title', 'description'];

    protected $useTimestamps = true;

    public function compileData($services)
    {
        $data = [];
        $introductions = [];
        $images = [];

        foreach ($services as $service) {

            if ($service['path']) {
                $images[$service['id']][] = $service['path'];
            }

            $introductions[$service['id']][] = [
                'title' => $service['intro_title'],
                'description' => $service['intro_desc'],
                'type' => $service['type'],
            ];

            $data[$service['id']] = [
                'id' => $service['id'],
                'title' => $service['title'],
                'description' => $service['description'],
                'gallery' => [
                    'description' => $service['gallery_desc'],
                    'images' => $images[$service['id']] ?? [],
                ],
                'introductions' => $introductions[$service['id']] ?? []
            ];
        }

        return $data;
    }

    public function relatedQuery()
    {
        /**
         * SELECT services.id,
         * services.title,
         * services.description,
         * intro.title as intro_title,
         * intro.description as intro_desc,
         * intro.type,
         * gallery.description as gallery_desc,
         * images.path FROM services
         * LEFT JOIN service_introductions as intro ON services.id = intro.service_id
         * LEFT JOIN service_galleries as gallery ON services.id = gallery.service_id
         * LEFT JOIN service_gallery_images as images ON gallery.id = images.service_gallery_id
         */

        return $this->select(
            'services.id,
            services.title,
            services.description,
            intro.title as intro_title,
            intro.description as intro_desc,
            intro.type,
            gallery.description as gallery_desc,
            images.path'
        )->join(
            'service_introductions as intro',
            'services.id = intro.service_id',
            'left'
        )->join(
            'service_galleries as gallery',
            'services.id = gallery.service_id',
            'left'
        )->join(
            'service_gallery_images as images',
            'gallery.id = images.service_gallery_id',
            'left'
        );
    }
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceGalleryImage extends Model
{
    protected $table = 'service_gallery_images';

    protected $allowedFields = ['path', 'service_gallery_id'];

    protected $useTimestamps = true;
}
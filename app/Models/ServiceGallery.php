<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceGallery extends Model
{
    protected $table = 'service_galleries';

    protected $allowedFields = ['description', 'service_id'];

    protected $useTimestamps = true;
}
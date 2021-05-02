<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceIntroduction extends Model
{
    protected $table = 'service_introductions';

    protected $allowedFields = ['title', 'description', 'service_id', 'type'];

    protected $useTimestamps = true;
}
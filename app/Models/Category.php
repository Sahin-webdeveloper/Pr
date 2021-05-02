<?php

namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'slug'];

    protected $useTimestamps = false;
}
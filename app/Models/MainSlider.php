<?php

namespace App\Models;

use CodeIgniter\Model;

class MainSlider extends Model
{
    protected $table = 'main_sliders';

    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['title', 'short_description', 'path', 'url'];
}
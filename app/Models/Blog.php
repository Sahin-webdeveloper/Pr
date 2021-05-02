<?php

namespace App\Models;

use CodeIgniter\Model;

class Blog extends Model
{
    protected $allowedFields = ['user_id', 'blog_category_id', 'title', 'description', 'image'];
}
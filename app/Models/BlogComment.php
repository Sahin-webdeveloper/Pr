<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogComment extends Model
{
    protected $allowedFields = ['blog_id', 'username', 'email', 'comment'];
}
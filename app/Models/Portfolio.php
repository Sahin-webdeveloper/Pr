<?php

namespace App\Models;

use CodeIgniter\Model;

class Portfolio extends Model
{
    protected $table = 'portfolios';

    protected $allowedFields = ['title', 'description', 'portfolio_category_id', 'path'];
}

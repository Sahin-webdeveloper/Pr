<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioCategory extends Model
{
    protected $table = 'portfolio_categories';

    protected $allowedFields = ['title'];
}
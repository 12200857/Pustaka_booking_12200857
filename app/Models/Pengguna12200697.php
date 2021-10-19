<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengguna12200697 extends Model
{
    protected $DBGroup              = 'koneksiku';
    protected $table                = 'pengguna_12200697';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama', 'password'];
}
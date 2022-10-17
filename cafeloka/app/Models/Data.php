<?php

namespace App\Models;

use CodeIgniter\Model;

class Data extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'data';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_cafe', 'keterangan'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}

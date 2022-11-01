<?php

namespace App\Models;

use CodeIgniter\Model;

class Booking extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'booking';
    protected $primaryKey       = 'id_booking';
    protected $allowedFields    = ['nama','alamat','kontak','deskripsi','id_data'];
    protected $returnType       = 'object';
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = false;
    // Dates

    function getAll(){
        $builder = $this->db->table('booking');
        $builder->join('data','data.id = booking.id_data');
        $query = $builder->get();
        return $query->getResult();
    }

    function getPaginated($num, $keyword = null){
        $builder = $this->builder();
        $builder->join('data','data.id = booking.id_data');
        return[
            'book' => $this->paginate($num),
            'pager' => $this->pager
        ];
    }
}

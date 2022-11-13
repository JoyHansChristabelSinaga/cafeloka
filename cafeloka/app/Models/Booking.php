<?php

namespace App\Models;

use CodeIgniter\Model;

class Booking extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'booking';
    protected $primaryKey       = 'id_booking';
    protected $allowedFields    = ['nama','alamat','kontak','deskripsi','id_data','username'];
    protected $returnType       = 'object';
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = false;
    // Dates

    function getAll(){
        $builder = $this->db->table('booking');
        $builder->join('data','data.id = booking.id_data');
        $builder->join('users','users.username = booking.username');
        $query = $builder->get();
        return $query->getResult();
    }

    function getUsers(){
        $builder = $this->db->table('booking');
        $builder->join('data','data.id = booking.id_data');
        $builder->where('username' , session()->get('username'));
        $query = $builder->get();
        return $query->getResult();
    }
}

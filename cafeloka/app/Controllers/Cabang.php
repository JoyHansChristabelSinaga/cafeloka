<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Data;
use App\Models\Daerah;

class Cabang extends BaseController
{
    function __construct()
    {
        $this->daerah = new Daerah();
        $this->data = new Data();
    }

    public function index($id)
    {
        $daerah = $this->daerah->find($id);

        $_data['data'] = $daerah;
        $_data['daerah'] = $this->data->findAll();

        return view('data/cafeSetiapCabang', $_data);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Data;
use App\Models\Daerah;
use App\Models\Booking;
class DataController extends BaseController
{

    // protected $helpers = ['custom'];

    function __construct()
    {
        $this->daerah = new Daerah();
        $this->data = new Data();
    }

    public function index()
    {
        $dataModel = new Data();
        $dataDaerah= new Daerah();
        $dataBook = new Booking();
        $data = $dataModel->findAll();
        $jumlah_kafe = $dataModel->countAllResults();
        $jumlah_daerah = $dataDaerah->countAllResults();
        $jumlah_booking = $dataBook->countAllResults();
        // $builder = $db->table('mytable');
        // $query   = $data->get();

        $_data = [
            'data' => $data,
            'jumlah_kafe' => $jumlah_kafe,
            'jumlah_daerah'=>$jumlah_daerah,
            'jumlah_booking'=>$jumlah_booking
            // 'count_data' => $this->data->num_rows()

        ];

        return view('vw_home', $_data);
    }

    public function create()
    {
        $_data = [
            'data' => $this->daerah->findAll()
        ];
        return view('data/create', $_data);
    }

    public function store()
    {

        if (!$this->validate([
            'nama_cafe' => 'required',
            'manager' => 'required',
            'keterangan' => 'required',
            'alamat' => 'required',
            'id_daerah' => 'required'
        ])) {
            return redirect()->to('/create');
        }
        // $data = $this->request->getPost();
        // $this->data->insert($data);
        // // $dataModel->save($_data);

        // return redirect()->to('/data');

        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getRandomName();
        $this->data->insert([
            'nama_cafe' => $this->request->getPost('nama_cafe'),
            'manager' => $this->request->getPost('manager'),
            'keterangan' => $this->request->getPost('keterangan'),
            'foto' => $fileName,
            'alamat' => $this->request->getPost('alamat'),
            'id_daerah' => $this->request->getPost('id_daerah')
        ]);
        $dataBerkas->move('gambarCafe/', $fileName);
        return redirect()->to('/data');
    }

    public function view()
    {
        $_data = [
            'data' => $this->data->getAll()
        ];
        return view('Data/data', $_data);
    }

    public function delete($id)
    {
        $dataModel = new Data();
        $dataModel->delete($id);

        return redirect()->to('/data');
    }

    public function edit($id)
    {
        $data = $this->data->find($id);

        if (is_object($data)) {
            $_data['data'] = $data;
            $_data['daerah'] = $this->daerah->findAll();
            return view('data/edit', $_data);
        }
    }

    public function update($id)
    {
        // $_data = $this->request->getPost();
        // $this->data->update($id, $_data);

        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getRandomName();
        $this->data->update($id, [
            'nama_cafe' => $this->request->getPost('nama_cafe'),
            'manager' => $this->request->getPost('manager'),
            'keterangan' => $this->request->getPost('keterangan'),
            'foto' => $fileName,
            'alamat' => $this->request->getPost('alamat'),
            'id_daerah' => $this->request->getPost('id_daerah')
        ]);
        $dataBerkas->move('gambarCafe/', $fileName);
        return redirect()->to('/data');
    }

    public function cabang()
    {
        $_data = [
            'daerah' => $this->daerah->findAll()
        ];
        return view('/Data/cabang', $_data);
    }
}

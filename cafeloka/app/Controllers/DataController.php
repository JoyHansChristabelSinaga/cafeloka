<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Data;

class DataController extends BaseController
{
    public function index()
    {
        $dataModel = new Data();
        $data = $dataModel->findAll();

        $_data = [
            'data' => $data
        ];

        return view('layout/header')
            . view('vw_home', $_data)
            . view('layout/footer');
    }

    public function create()
    {
        return view('layout/header')
            . view('data/create')
            . view('layout/footer');
    }

    public function store()
    {

        if (!$this->validate([
            'nama_cafe' => 'required',
            'keterangan' => 'required',
            'alamat' => 'required',
        ])) {
            return redirect()->to('/create');
        }
        $dataModel = new Data();
        $_data = [
            'nama_cafe' => $this->request->getPost('nama_cafe'),
            'alamat' => $this->request->getPost('alamat'),
            'keterangan' => $this->request->getPost('keterangan')
        ];

        $dataModel->save($_data);

        return redirect()->to('layout/vw_home');
    }

    public function view()
    {
        $dataModel = new Data();
        $data = $dataModel->findAll();

        $_data = [
            'data' => $data
        ];

        return view('layout/header')
            . view('Data/data', $_data)
            . view('layout/footer');
    }

    public function delete($id){
        $dataModel = new Data();
        $dataModel->delete($id);

        return redirect()->to('data');
    }

    public function edit($id){
        $dataModel = new Data();
        $data = $dataModel->find($id);

        $_data = [
            'data' => $data
        ];

        return view('layout/header')
        . view('data/edit', $_data)
        . view('layout/footer');
    }

    public function update($id){

        if(!$this->validate([
            'nama_cafe' => 'required',
            'keterangan' => 'required',
            'alamat' => 'required',
        ])){
            return redirect()-> to('data/edit/'.$id);
        }
        $dataModel = new Data();
        $_data = [
            'nama_cafe' => $this->request->getVar('nama_cafe'),
            'alamat' => $this->request->getVar('alamat'),
            'keterangan' => $this->request->getVar('keterangan')
        ]; 

        $dataModel->update($id, $_data);
        return redirect()->to('/data');
    }
}

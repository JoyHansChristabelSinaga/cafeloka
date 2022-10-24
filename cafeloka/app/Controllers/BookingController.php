<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Booking;

class BookingController extends BaseController
{
    public function index()
    {
        $dataModel = new Booking();
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
            'nama' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'nama_cafe' => 'required',
            'deskripsi' => 'required',
        ])) {
            return redirect()->to('/create');
        }
        $dataModel = new Booking();
        $_data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'kontak' => $this->request->getPost('kontak'),
            'nama_cafe' => $this->request->getPost('nama_cafe'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $dataModel->save($_data);

        return redirect()->to('layout/vw_home');
    }

    public function view()
    {
        $dataModel = new Booking();
        $data = $dataModel->findAll();

        $_data = [
            'data' => $data
        ];

        return view('layout/header')
            . view('Data/data', $_data)
            . view('layout/footer');
    }

    public function delete($id){
        $dataModel = new Booking();
        $dataModel->delete($id);

        return redirect()->to('data');
    }

    public function edit($id){
        $dataModel = new Booking();
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
            'nama' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'nama_cafe' => 'required',
            'deskripsi' => 'required',
        ])){
            return redirect()-> to('data/edit/'.$id);
        }
        $dataModel = new Booking();
        $_data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'kontak' => $this->request->getPost('kontak'),
            'nama_cafe' => $this->request->getPost('nama_cafe'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ]; 

        $dataModel->update($id, $_data);
        return redirect()->to('/data');
    }
}

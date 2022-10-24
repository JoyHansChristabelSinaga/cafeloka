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
            . view('booking/booking', $_data)
            . view('layout/footer');
    }

    public function createBooking()
    {
        return view('layout/header')
            . view('booking/create')
            . view('layout/footer');
    }

    public function storeBooking()
    {
        if (!$this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'nama_cafe' => 'required',
            'deskripsi' => 'required',
        ])) {
            return redirect()->to('/createBooking');
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

        return redirect()->to('booking');
    }

    public function view()
    {
        $dataModel = new Booking();
        $data = $dataModel->findAll();

        $_data = [
            'data' => $data
        ];

        return view('layout/header')
            . view('booking/booking', $_data)
            . view('layout/footer');
    }

    public function deleteBooking($id){
        $dataModel = new Booking();
        $dataModel->delete($id);

        return redirect()->to('/booking');
    }

    public function editBooking($id){
        $dataModel = new Booking();
        $data = $dataModel->find($id);

        $_data = [
            'data' => $data
        ];

        return view('layout/header')
        . view('booking/edit', $_data)
        . view('layout/footer');
    }

    public function updateBooking($id){

        if(!$this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'nama_cafe' => 'required',
            'deskripsi' => 'required',
        ])){
            return redirect()-> to('booking/edit/'.$id);
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
        return redirect()->to('/booking');
    }
}

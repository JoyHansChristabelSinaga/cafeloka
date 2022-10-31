<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Booking;
use App\Models\Data;

class BookingController extends BaseController
{
    function __construct()
    {
        $this->booking = new Booking();
        $this->data = new Data();
    }

    public function index()
    {
        // $dataModel = new Booking();
        // $data = $dataModel->getAll();

        // $_data = [
        //     'siuu' => $this->booking->findAll()
        // ];
        // dd($this->booking->getAll());
        return view('layout/header')
            . view('booking/booking')
            . view('layout/footer');
    }

    public function createBooking()
    {
        $_data = [
            'data' => $this->data->findAll()
        ];
        return view('layout/header')
            . view('booking/create', $_data)
            . view('layout/footer');
    }

    public function storeBooking()
    {
        if (!$this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'deskripsi' => 'required',
            'id_data' => 'required'
        ])) {
            return redirect()->to('/createBooking');
        }
        // $dataModel = new Booking();
        // $_data = [
        //     'nama' => $this->request->getPost('nama'),
        //     'alamat' => $this->request->getPost('alamat'),
        //     'kontak' => $this->request->getPost('kontak'),
        //     'nama_cafe' => $this->request->getPost('nama_cafe'),
        //     'deskripsi' => $this->request->getPost('deskripsi'),
        // ];

        $data = $this->request->getPost();
        $this->booking->insert($data);
        // $dataModel->save($_data);

        return redirect()->to('booking');
    }

    public function view()
    {
        $_data = [
            'siuu' => $this->booking->getAll()
        ];
        // dd($this->booking->getAll());
        return view('layout/header')
            . view('booking/booking',$_data)
            . view('layout/footer');
    }

    public function deleteBooking($id){
        $dataModel = new Booking();
        $dataModel->delete($id);

        return redirect()->to('/booking');
    }

    public function editBooking($id){
        // $dataModel = new Booking();
        // $data = $dataModel->find($id);

        // $_data = [
        //     'data' => $data
        // ];
        $booking = $this->booking->find($id);
        
        $data['booking'] = $booking;
        $data['data'] = $this->data->findAll();

        return view('layout/header')
        . view('booking/edit', $data)
        . view('layout/footer');
    }

    public function updateBooking($id){

        if(!$this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'deskripsi' => 'required',
        ])){
            return redirect()-> to('booking/edit/'.$id);
        }
        // $dataModel = new Booking();
        // $_data = [
        //     'nama' => $this->request->getPost('nama'),
        //     'alamat' => $this->request->getPost('alamat'),
        //     'kontak' => $this->request->getPost('kontak'),
        //     'deskripsi' => $this->request->getPost('deskripsi'),
        // ]; 

        $_data = $this->request->getPost();
        $this->booking->update($id, $_data);
        return redirect()->to('/booking');
    }
}

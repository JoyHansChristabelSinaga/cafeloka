<?php namespace App\Controllers;
use App\Models\Booking;
use App\Models\Data;

class Home extends BaseController
{
	function __construct()
    {
        $this->booking = new Booking();
        $this->data = new Data();
    }


	public function index()
	{
		$_data = [
            'siuu' => $this->data->findAll()
        ];
		return view('layout/header')
		. view('vw_home', $_data)
		. view('layout/footer');
	}
}
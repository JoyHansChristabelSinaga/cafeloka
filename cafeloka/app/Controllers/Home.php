<?php namespace App\Controllers;

use App\Models\Data;

class Home extends BaseController
{
	public function index()
	{
		return view('layout/header')
		. view('vw_home')
		. view('layout/footer');
	}

	public function koko(){
		$dataModel = new Data();
        $data = $dataModel->findAll();

        $_data = [
            'data' => $data
        ];
		return view('layout/koko',$_data);
	}
}
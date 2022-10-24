<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('layout/header')
		. view('vw_home')
		. view('layout/footer');
	}
}
<?php 
namespace App\Controllers\Beranda;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'subtitle' => '',
			'navbar' => 'layout/beranda/navbar',
			'top_header' => 'layout/beranda/top_header'
		];
		return view('beranda/home', $data);
	}
}
<?php 
namespace App\Controllers\Beranda;

use App\Controllers\BaseController;

class Login extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'subtitle' => '',
			'navbar' => 'layout/beranda/navbar',
			'top_header' => 'layout/beranda/top_header'
		];
		return view('beranda/login', $data);
	}
}
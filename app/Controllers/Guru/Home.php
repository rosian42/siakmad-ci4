<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		$data = [
			'title' => 'Dashboard',
			'subtitle' => '',
			'navbar' => 'layout/admin/navbar',
			'sidebar' => 'layout/admin/sidebar',
			'session' => session()
		];
		return view('admin/selamat-datang', $data);
	}
}

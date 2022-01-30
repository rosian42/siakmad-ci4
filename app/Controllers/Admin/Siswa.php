<?php 
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Siswa',
			'subtitle' => '',
			'navbar' => 'layout/admin/navbar',
			'sidebar' => 'layout/admin/sidebar',
			'session' => session()
		];
		return view('admin/siswa/list', $data);
	}
}
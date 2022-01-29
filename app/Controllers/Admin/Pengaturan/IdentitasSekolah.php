<?php

namespace App\Controllers\Admin\Pengaturan;

use App\Controllers\BaseController;

class IdentitasSekolah extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        $data = [
            'title' => 'Pengaturan',
            'subtitle' => 'Identitas Sekolah',
            'navbar' => 'layout/admin/navbar',
            'sidebar' => 'layout/admin/sidebar'
        ];
        return view('/admin/pengaturan/identitas-sekolah', $data);
    }

    public function simpan()
    {
        echo ("controler identitas metod simpan");
    }
}

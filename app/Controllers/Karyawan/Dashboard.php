<?php

namespace App\Controllers\Karyawan;

use App\Controllers\BaseController;
use App\Models\Model_dashboard_admin;

class Dashboard extends BaseController
{

    public function index()
    {
        $session = session();

        if (!$session->get('nama_login') || $session->get('status_login') != 'Karyawan') {
            return redirect()->to('Login');
        }

        // $model = new Model_dashboard_admin();

        $data = [
            'judul' => 'Tabel Admin',
            'kamar_kosong' => 20,
            'kamar_terisi' => 20,
            'dokter' => 20,
            'pegawai' => 20
        ];
        return view('Karyawan/index', $data);
    }
}
<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_dashboard_admin;

class Dashboard extends BaseController
{

    public function index()
    {
        $session = session();

        if (!$session->get('nama_login') || $session->get('status_login') != 'Admin') {
            return redirect()->to('Login');
        }

        $model = new Model_dashboard_admin();
        $jumlah_kapal = $model->jumlah_kapal()->getResultArray();
        $jumlah_trip = $model->jumlah_trip()->getResultArray();
        $jumlah_user = $model->jumlah_user()->getResultArray();
        $jumlah_admin = $model->jumlah_admin()->getResultArray();

        $data = [
            'judul' => 'Tabel Admin',
            'jumlah_kapal' => count($jumlah_kapal),
            'jumlah_trip' => count($jumlah_trip),
            'jumlah_user' => count($jumlah_user),
            'jumlah_admin' => count($jumlah_admin)
        ];
        return view('Admin/index', $data);
    }
}
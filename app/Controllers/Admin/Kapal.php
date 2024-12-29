<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_kapal;

class Kapal extends BaseController
{
    protected $Model_kapal;
    public function __construct()
    {
        $session = session();

        if (!$session->get('nama_login') || $session->get('status_login') != 'Admin') {
            return redirect()->to('Login');
        }

        $this->Model_kapal = new Model_kapal();
        helper(['form', 'url']);
    }

    public function index()
    {
        $session = session();
        $model = new Model_kapal();
        $kapal = $model->view_data()->getResultArray();

        $data = [
            'judul' => 'Tabel Kapal',
            'kapal' => $kapal
        ];
        return view('Admin/viewTKapal', $data);
    }

    public function add_kapal()
    {
        $session = session();

        $data = array(
            'namaprs'     => $this->request->getPost('input_pelayaran'),
            'namakp'     => $this->request->getPost('input_nama')
        );
        $model = new Model_kapal();
        $model->add_data($data);
        $session->setFlashdata('sukses', 'Data sudah berhasil ditambah');
        return redirect()->to(base_url('Admin/Kapal'));
    }

    public function update_kapal()
    {
        $session = session();
        $model = new Model_kapal();
        date_default_timezone_set('Asia/Jakarta');
        
        $id = $this->request->getPost('id');
        $data = array(
            'namaprs'     => $this->request->getPost('edit_pelayaran'),
            'namakp'     => $this->request->getPost('edit_nama')
        );

        $model->update_data($data, $id);
        $session->setFlashdata('sukses', 'Data sudah berhasil diubah');
        return redirect()->to(base_url('Admin/Kapal'));
    }

    public function delete_kapal()
    {
        $session = session();
        $model = new Model_kapal();
        $id = $this->request->getPost('id');
        // $foreign = $model->cek_foreign($id);
        // if ($foreign == 0) {
            $model->delete_data($id);
            session()->setFlashdata('sukses', 'Data sudah berhasil dihapus');
        // } else {
        //     session()->setFlashdata('gagal', 'Data ini dipakai di tabel lain dan tidak bisa dihapus');
        // }
        return redirect()->to('/Admin/Kapal');
    }

    public function cek_nama($nama)
    {
        $model = new Model_kapal();
        $cek_nama = $model->cek_nama($nama)->getResultArray();
        $respon = json_decode(json_encode($cek_nama), true);
        $data['results'] = count($respon);
        echo json_encode($data);
    }

    public function data_edit($id)
    {
        $model = new Model_kapal();
        $datahari = $model->detail_data($id)->getResultArray();
        $respon = json_decode(json_encode($datahari), true);
        $data['results'] = array();
        foreach ($respon as $value) :
            $isi['id'] = $value['id'];
            $isi['namakp'] = $value['namakp'];
        endforeach;
        echo json_encode($isi);
    }

}

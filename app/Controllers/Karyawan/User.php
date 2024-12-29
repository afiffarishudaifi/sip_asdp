<?php

namespace App\Controllers\Karyawan;

use App\Controllers\BaseController;
use App\Models\Model_user;

class User extends BaseController
{
    protected $Model_user;
    public function __construct()
    {
        $session = session();

        if (!$session->get('nama_login') || $session->get('status_login') != 'Karyawan') {
            return redirect()->to('Login');
        }

        $this->Model_user = new Model_user();
        helper(['form', 'url']);
        $this->db = db_connect();
    }

    public function index()
    {
        $session = session();
        $model = new Model_user();
        $user = $model->view_data()->getResultArray();

        $data = [
            'judul' => 'Tabel User',
            'user' => $user
        ];
        return view('Admin/viewTUser', $data);
    }

    public function add_user()
    {
        $session = session();
        $encrypter = \Config\Services::encrypter();
        
        $data = array(
            'nama' => $this->request->getPost('input_nama'),
            'username'     => $this->request->getPost('input_username'),
            'status'     => $this->request->getPost('input_status'),
            'password'     => base64_encode($encrypter->encrypt($this->request->getPost('input_password')))
        );

        $modeluser = new Model_user();
        $modeluser->add_data($data);

        $session->setFlashdata('sukses', 'Data sudah berhasil ditambah');
        return redirect()->to(base_url('Admin/User'));
    }

    public function update_user()
    {
        $session = session();
        $encrypter = \Config\Services::encrypter();
        $model = new Model_user();

        $id = $this->request->getPost('id');
        $password = $this->request->getPost('edit_password');
        
        $data = array(
            'nama' => $this->request->getPost('edit_nama'),
            'username'     => $this->request->getPost('edit_username'),
            'status'     => $this->request->getPost('edit_status'),
            'password'     => base64_encode($encrypter->encrypt($this->request->getPost('edit_password')))
        );

        $model->update_data($data, $id);

        $session->setFlashdata('sukses', 'Data sudah berhasil diubah');
        return redirect()->to(base_url('Admin/User'));
    }

    public function delete_user()
    {
        $session = session();
        $model = new Model_user();
        $id = $this->request->getPost('id');
        $id_user = $this->request->getPost('id_user');
        $model->delete_data($id);
        
        session()->setFlashdata('sukses', 'Data sudah berhasil dihapus');
        return redirect()->to('/Admin/User');
    }

    public function data_edit($nik_user)
    {
        $model = new Model_user();
        $datauser = $model->detail_data($nik_user)->getResultArray();
        $respon = json_decode(json_encode($datauser), true);
        $data['results'] = array();
        foreach ($respon as $value) :
            $isi['id_user'] = $value['id'];
            $isi['nama'] = $value['nama'];
            $isi['username'] = $value['username'];
            $isi['status'] = $value['status'];
        endforeach;
        echo json_encode($isi);
    }

    public function cek_username($username)
    {
        $model = new Model_user();
        $cek_username = $model->cek_username($username)->getResultArray();
        $respon = json_decode(json_encode($cek_username), true);
        $data['results'] = count($respon);
        echo json_encode($data);
    }

}

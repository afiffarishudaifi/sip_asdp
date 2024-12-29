<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_jasasandar;
use CodeIgniter\Model;

class JasaSandar extends BaseController
{
    protected $Model_jasasandar;
    public function __construct()
    {
        $session = session();

        if (!$session->get('nama_login') || $session->get('status_login') != 'Admin') {
            return redirect()->to('Login');
        }

        $this->Model_jasasandar = new Model_jasasandar();
        helper(['form', 'url']);
        $this->db = db_connect();
    }

    public function index()
    {
        $session = session();
        $model = new Model_jasasandar();
        $data = $model->view_data()->getResultArray();

        $data = [
            'judul' => 'Tabel Jasa Sandar',
            'data' => $data
        ];
        return view('Admin/viewJasaSandar', $data);
    }

    public function add_jasasandar()
    {
        $session = session(); 

        $data = array(
            'id_kapal'     => $this->request->getPost('input_kapal'),
            'tanggal'     => $this->request->getPost('input_tanggal'),
            'jam_tambat'     => $this->request->getPost('input_tambat'),
            'jam_tolak'     => $this->request->getPost('input_tolak'),
            'lama_tambat'     => $this->request->getPost('input_lama'),
            'keterangan'     => $this->request->getPost('input_keterangan')
        );

        $model = new Model_jasasandar();
        $model->add_data($data);
        $session->setFlashdata('sukses', 'Data sudah berhasil ditambah');
        return redirect()->to(base_url('Admin/JasaSandar'));
    }

    public function update_jasasandar()
    {
        $session = session();
        $model = new Model_jasasandar();
        date_default_timezone_set('Asia/Jakarta');

        $id = $this->request->getPost('no_id');

        $data = array(
            'id_kapal'     => $this->request->getPost('edit_kapal'),
            'tanggal'     => $this->request->getPost('edit_tanggal'),
            'jam_tambat'     => $this->request->getPost('edit_tambat'),
            'jam_tolak'     => $this->request->getPost('edit_tolak'),
            'lama_tambat'     => $this->request->getPost('edit_lama'),
            'keterangan'     => $this->request->getPost('edit_keterangan')
        );
        $model->update_data($data, $id);

        $session->setFlashdata('sukses', 'Data sudah berhasil diubah');
        return redirect()->to(base_url('Admin/JasaSandar'));
    }

    public function delete_jasasandar()
    {
        $session = session();
        $model = new Model_jasasandar();
        $id = $this->request->getPost('id');
        $model->delete_data($id);
        session()->setFlashdata('sukses', 'Data sudah berhasil dihapus');
        return redirect()->to('/Admin/JasaSandar');
    }

    public function data_edit($no_id)
    {
        $model = new Model_jasasandar();
        $datainap = $model->detail_data($no_id)->getResultArray();
        $respon = json_decode(json_encode($datainap), true);
        $data['results'] = array();
        foreach ($respon as $value) :
            $isi['no_id'] = $value['no_id'];
            $isi['id_kapal'] = $value['id_kapal'];
            $isi['namakp'] = $value['namakp'];
            $isi['tanggal'] = $value['tanggal'];
            $isi['jam_tambat'] = $value['jam_tambat'];
            $isi['jam_tolak'] = $value['jam_tolak'];
            $isi['lama_tambat'] = $value['lama_tambat'];
            $isi['keterangan'] = $value['keterangan'];
        endforeach;
        echo json_encode($isi);
    }

    public function data_kapal()
    {
        $request = service('request');
        $postData = $request->getPost(); 

        $response = array();

        $data = array();

        $db      = \Config\Database::connect();
        $builder = $this->db->table("kapal");

        $kapal = [];

        if (isset($postData['query'])) {

            $query = $postData['query'];

            // Fetch record
            $builder->select('id, namakp');
            $builder->like('namakp', $query, 'both');
            $query = $builder->get();
            $data = $query->getResult();
        } else {
    
            // Fetch record
            $builder->select('id, namakp');
            $query = $builder->get();
            $data = $query->getResult();
        }
        
        foreach ($data as $country) {
            $kapal[] = array(
                "id" => $country->id,
                "text" => $country->namakp,
            );
        }

        $response['data'] = $kapal;

        return $this->response->setJSON($response);
    }
}

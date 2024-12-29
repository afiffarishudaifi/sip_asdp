<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_laporanjasasandar;
use CodeIgniter\Model;

class LaporanJasaSandar extends BaseController
{
    protected $Model_laporanjasasandar;
    public function __construct()
    {
        $session = session();

        if (!$session->get('nama_login') || $session->get('status_login') != 'Admin') {
            return redirect()->to('Login');
        }

        $this->Model_laporanjasasandar = new Model_laporanjasasandar();
        helper(['form', 'url']);
        $this->db = db_connect();
    }

    public function index()
    {
        $session = session();
        $model = new Model_laporanjasasandar();

        $data = [
            'judul' => 'Tabel Jasa Sandar'
        ];
        return view('Admin/viewLaporanJasaSandar', $data);
    }

    public function data($tanggal = null, $kapal = null)
    {
        $session = session();

        if ($tanggal) $tgl = explode(' - ', $tanggal);
        if ($tanggal) { $param['tanggal1'] = date("Y-m-d", strtotime($tgl[0])); } else { $param['tanggal1'] = date("Y-m-d"); };
        if ($tanggal) { $param['tanggal2'] = date("Y-m-d", strtotime($tgl[1])); } else { $param['tanggal2'] = date("Y-m-d"); };

        if ($kapal != 'null') {
            $param['id_kapal'] = $kapal;
        } else {
            $param['id_kapal'] = null;
        }

        $model = new Model_laporanjasasandar();
        $laporan = $model->filter($param)->getResultArray();

        $respon = $laporan;
        $data = array();

        if ($respon) {
            foreach ($respon as $value) {
                $isi['no_id'] = $value['no_id'];
                $isi['tanggal'] = $value['tanggal'];
                $isi['namakp'] = $value['namakp'];
                $isi['jam_tambat'] = $value['jam_tambat'];
                $isi['jam_tolak'] = $value['jam_tolak'];
                $isi['lama_tambat'] = $value['lama_tambat'];
                array_push($data, $isi);
            }
        }

        echo json_encode($data);
    }

    public function data_cetak()
    {
        $session = session();

        $tanggal = $this->request->getPost('tanggal');
        $kapal = $this->request->getPost('input_kapal');

        if ($tanggal) $tgl = explode(' - ', $tanggal);
        if ($tanggal) { $param['tanggal'] = date("Y-m-d", strtotime($tgl[0])); } else { $param['tanggal'] = date("Y-m-d"); };
        if ($tanggal) { $param['tanggal'] = date("Y-m-d", strtotime($tgl[1])); } else { $param['tanggal'] = date("Y-m-d"); };

        if ($kapal != 'null') {
            $param['id_kapal'] = $kapal;
        } else {
            $param['id_kapal'] = null;
        }

        $model = new Model_laporanjasasandar();
        $laporan = $model->filter($param)->getResultArray();

        $data = [
            'judul' => 'Laporan Jasa Sandar',
            'laporan' => $laporan
        ];
        return view('Admin/cetakPendaftaranJalan', $data);
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

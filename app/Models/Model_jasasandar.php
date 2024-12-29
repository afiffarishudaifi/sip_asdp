<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_jasasandar extends Model
{
    protected $table = 'form_data';
    protected $primaryKey = 'no_id';

    public function view_data()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('form_data');
        $builder->select('no_id, id_kapal, namakp, tanggal, jam_tambat, lama_tambat, jam_tolak, keterangan');
        $builder->join('kapal','form_data.id_kapal = kapal.id');
        return $builder->get();
    }

    public function add_data($data)
    {
        $query = $this->db->table('form_data')->insert($data);
        return $query;
    }

    public function detail_data($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('form_data');
        $builder->select("form_data.no_id, form_data.id_kapal, namakp, tanggal,
             jam_tambat, jam_tolak, lama_tambat, keterangan");
        $builder->join('kapal','form_data.id_kapal = kapal.id');
        $builder->where('no_id', $id);
        return $builder->get();
    }

    public function update_data($data, $id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('form_data');
        $builder->where('no_id', $id);
        $builder->set($data);
        return $builder->update();
    }

    public function delete_data($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('form_data');
        $builder->where('no_id', $id);
        return $builder->delete();
    }

}

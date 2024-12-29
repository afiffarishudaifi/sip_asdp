<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_kapal extends Model
{
    protected $table = 'kapal';
    protected $primaryKey = 'id';

    public function view_data()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('kapal');
        return $builder->get();
    }

    public function add_data($data)
    {
        $query = $this->db->table('kapal')->insert($data);
        return $query;
    }

    public function detail_data($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('kapal');
        $builder->where('id', $id);
        return $builder->get();
    }

    public function update_data($data, $id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('kapal');
        $builder->where('id', $id);
        $builder->set($data);
        return $builder->update();
    }

    public function delete_data($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('kapal');
        $builder->where('id', $id);
        return $builder->delete();
    }

    public function cek_nama($nama)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('kapal');
        $builder->select('id');
        $builder->where('namakp', $nama);
        return $builder->get();
    }
}

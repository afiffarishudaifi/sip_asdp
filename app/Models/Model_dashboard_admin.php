<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_dashboard_admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';

    public function jumlah_kapal()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('kapal');
        $builder->select('id');
        return $builder->get();
    }

    public function jumlah_user()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $builder->select('id');
        return $builder->get();
    }

    public function jumlah_admin()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $builder->select('id');
        $builder->where('status', 1);
        return $builder->get();
    }

    public function jumlah_trip()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('form_data');
        $builder->select('no_id');
        $builder->where('tanggal', date('Y-m-d'));
        return $builder->get();
    }

}

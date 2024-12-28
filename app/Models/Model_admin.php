<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_user extends Model
{
    protected $table = 'tbl_user';
    protected $primaryKey = 'id';

    public function view_data()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        return $builder->get();
    }

    public function add_data($data)
    {
        $query = $this->db->table('tbl_user')->insert($data);
        return $query;
    }

    public function detail_data($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $builder->select('tbl_user.id, tbl_user.nama, tbl_user.username');
        $builder->where('tbl_user.id', $id);
        return $builder->get();
    }

    public function update_data($data, $id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $builder->where('id', $id);
        $builder->set($data);
        return $builder->update();
    }

    public function delete_data($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $builder->where('id', $id);
        return $builder->delete();
    }

    public function cek_email($email)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $builder->select('tbl_user.id_tbl_user');
        $builder->where('user.email', $email);
        $builder->join('user','user.id_tbl_user = tbl_user.id_tbl_user');
        return $builder->get();
    }

    public function cek_max()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $builder->selectMax('id_tbl_user');
        return $builder->get();
    }

    public function max_id()
    {
    	$db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $builder->selectMax('id_tbl_user');
        return $builder->get();
    }
}

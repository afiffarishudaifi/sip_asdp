<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_login extends Model
{
    protected $table= 'tbl_user';
    protected $primaryKey ='id';
    protected $useTimestamps = true;

    public function loginSistem($username)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $query = $builder->where('username', $username);
        $query = $builder->where('status', 1);
        return $query->get();
    }

    public function addProfile($data)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pasien');
        $query =  $builder->insert($data);
        return $query;
    }

    // start google

    public function cek_max()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('admin');
        $builder->selectMax('id_user');
        return $builder->get();
    }

    public function cek_max_pasien()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('user');
        $builder->selectMax('id_user');
        return $builder->get();
    }

    public function cek_max_login($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('user');
        $builder->select('id_user');
        $builder->where('oauth_id',$id);
        return $builder->get();
    }

    public function cek_nik($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('user');
        $builder->select('user.id_user, pasien.nik');
        $builder->where('oauth_id',$id);
        $builder->join('pasien','pasien.nik = user.nik');
        return $builder->get();
    }

    public function isAlreadyRegister($authid){
        return $this->db->table('user')->getWhere(['oauth_id'=>$authid])->getRowArray()>0?true:false;
    }
    
	public function updateUserData($userdata, $authid){
		$this->db->table("user")->where(['oauth_id'=>$authid])->update($userdata);
    }
    
	public function insertUserData($userdata){
		$this->db->table("user")->insert($userdata);
	}
    // end login
}

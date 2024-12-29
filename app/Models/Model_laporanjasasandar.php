<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_laporanjasasandar extends Model
{
    protected $table = 'form_data';
    protected $primaryKey = 'no_id';

    public function filter($param)
    {
    	$db      = \Config\Database::connect();
        $builder = $db->table('form_data');
		$builder->select('no_id, namakp, tanggal, jam_tambat, jam_tolak, lama_tambat');
		$builder->join('kapal','kapal.id = form_data.id_kapal');
        if ($param['tanggal1']) $builder->where('tanggal >= ', $param['tanggal1']);
        if ($param['tanggal2']) $builder->where('tanggal <= ', $param['tanggal2']);
        if ($param['id_kapal']) $builder->where('id_kapal', $param['id_kapal']);
        return $builder->get();
    }
}

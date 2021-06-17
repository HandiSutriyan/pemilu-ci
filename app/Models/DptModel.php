<?php

namespace App\Models;

use CodeIgniter\Model;

class DptModel extends Model
{
	protected $table = 'tbl_dpt';
	protected $primaryKey = 'pemilih_id';
	protected $useTimestamps = true;
	protected $allowedFields = ['event_id','username','name', 'ptk','angkatan','user_password','vote_status'];

	public function getPemilih($id = false)
    {
        if($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['event_id' => $id])->getResult();
		}  
	}
	public function getPemilihByStatus($v_status){
    	return $this->getWhere(['vote_status'=> $v_status])->getResult();
    }
}

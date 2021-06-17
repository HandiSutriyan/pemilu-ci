<?php

namespace App\Models;

use CodeIgniter\Model;

class KotakSuaraModel extends Model
{
	protected $table = 'kotak_suara';
	protected $primaryKey = 'vote_id';
	protected $useTimestamps = true;
	protected $allowedFields = ['event_id','calon_id',];
	
	public function getResult($id = false)
    {
        if($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['event_id' => $id])->getResult();
		}  
	}
	public function getResultById($id){
    	return $this->where(['calon_id'=> $id])->first();
    }
}

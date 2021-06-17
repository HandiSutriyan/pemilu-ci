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
			//return $this->getWhere(['event_id' => $id])->getResult();
			return $this->query('select `kotak_suara`.event_id, `kotak_suara`.calon_id, count(*) as total ,tbl_calon.name from `kotak_suara`,`tbl_calon` where `kotak_suara`.`event_id`= '.$id.' and `kotak_suara`.`calon_id`=`tbl_calon`.`calon_id` group by calon_id')->getResult();
		}  
	}


	public function getResultById($id){
    	return $this->where(['calon_id'=> $id])->first();
    }
}

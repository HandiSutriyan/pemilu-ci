<?php

namespace App\Models;

use CodeIgniter\Model;

class CalonModel extends Model
{
	protected $table = 'tbl_calon';
	protected $primaryKey = 'calon_id';
	protected $useTimestamps = true;
	protected $allowedFields = ['event_id','name','ptk','angkatan','picture'];
	
	public function getCalon($id = false)
    {
        if($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['event_id' => $id])->getResult();
        }  
    }
}

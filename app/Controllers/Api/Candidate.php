<?php namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\CalonModel;

class Candidate extends ResourceController
{
    protected $format    = 'json';
	public function __construct(){
		$this->calonModel = new CalonModel();
	}

    public function index(){
    	$results = $this->calonModel->getCalon();
        return $this->respond($results, 200);
    }
    public function show($id = NULL){
    	$results = $this->calonModel->getCalon($id);
        if($results){
            return $this->respond($results, 200);
        }else{
            return $this->failNotFound('No Data Found with event id '.$id);
        }
    }

    // ...
}
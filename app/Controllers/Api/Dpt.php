<?php namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\DptModel;

class Dpt extends ResourceController
{
    protected $format    = 'json';
	public function __construct(){
		$this->dptModel = new DptModel();
	}

    public function index(){
    	$results = $this->dptModel->getPemilih();
        return $this->respond($results, 200);
    }
    public function show($id = NULL){
    	$results = $this->dptModel->getPemilih($id);
        if($results){
            return $this->respond($results, 200);
        }else{
            return $this->failNotFound('No Data Found with event id '.$id);
        }
    }

    // ...
}
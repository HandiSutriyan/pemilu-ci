<?php namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\KotakSuaraModel;
use App\Models\DptModel;

class Kotaksuara extends ResourceController
{
    protected $format    = 'json';
	public function __construct(){
        $this->resultModel = new KotakSuaraModel();
        $this->dptModel = new DptModel();
	}

    public function index(){
    	$results = $this->resultModel->getResult();
        return $this->respond($results, 200);
    }
    public function show($id = NULL){
        $data=$this->resultModel->getResult($id);
        $golput = $this->dptModel->getPemilihByStatus(0,$id);
        $done = $this->dptModel->getPemilihByStatus(1,$id);
        $results = [
            'status'=>200,
            'error'=>false,
            'data'=>$data,
            'golput'=> $golput,
            'done'=> $done
        ];
        if($data){
            return $this->respond($results, 200);
        }else{
            return $this->failNotFound('No Data Found with event id '.$id);
        }
    }

    // ...
}
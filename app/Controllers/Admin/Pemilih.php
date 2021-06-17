<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\EventModel;

class Pemilih extends BaseController
{
    public function __construct(){
		$this->eventModel = new EventModel;
	}
	
	public function index()
	{
		
		$eventData = $this->eventModel->findAll();
		$data =[
			'title' => 'Data Calon',
			'validation' => \Config\Services::validation(),
			'data_event' => $eventData
        ];
		return view('pages/admin/dpt/index', $data);
    }
    
    public function create()
	{
		
		$file = $this->request->getFile('filedpt');
		$dummydpt = array();


		dd($dummydpt);
		session()->setFlashdata('message','Berhasil import excel');
    }
    
    public function update()
	{
		//return view('pages/admin/dpt/update');
	}
}

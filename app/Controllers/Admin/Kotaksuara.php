<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\EventModel;

class Kotaksuara extends BaseController
{
	protected $eventModel;
    public function __construct(){
		$this->eventModel = new EventModel;
	}
	
	public function index()
	{
		$eventData = $this->eventModel->findAll();
		$data =[
			'title' => 'Perolehan Suara Masuk',
			'data_event' => $eventData
        ];
		return view('pages/result/index', $data);
    }
}

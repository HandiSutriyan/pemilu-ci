<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\EventModel;

class Events extends BaseController
{
    protected $eventModel;
    public function __construct(){
        $this->eventModel = new EventModel;
    }
    public function index()
	{
        $eventData = $this->eventModel->findAll();
        $data=[
            'title'=>'Data Acara',
            'data_event' => $eventData
        ];
        return view('pages/admin/events/list', $data);
    }
    public function create(){
        return view('pages/admin/events/create', $data);
    }
    public function update(){
        return view('pages/admin/events/update', $data);
    }
}

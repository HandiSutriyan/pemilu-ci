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
        $data=[
            'title'=>'Buat Acara',
        ];
        return view('pages/admin/events/create', $data);
    }
    public function save(){
        $session = session();
        $save = [
            'name'=> $this->request->getVar('name'),
            'desc'=> $this->request->getVar('desc'),
            'event_start'=> $this->request->getVar('start').'0',
            'event_stop'=> $this->request->getVar('stop').'0',
            'created_by'=> $session->get('user_id'),
        ];
        //dd($save);
        $this->eventModel->save($save);
        session()->setFlashdata('msg','Data berhasil ditambahkan');
        return redirect()->to("/admin/events/create");
    }

    public function detail($event_id){
        $eventData = $this->eventModel->getEvent($event_id);
        $data=[
            'title'=>'Ubah Acara',
            'data_event' => $eventData
        ];
        //dd($data);
        return view('pages/admin/events/update', $data);
    }

    public function update($id){
        $session = session();
        $edit = [
			'name'=> $this->request->getVar('name'),
            'desc'=> $this->request->getVar('desc'),
            'event_start'=> $this->request->getVar('start').'0',
            'events_stop'=> $this->request->getVar('stop').'0',
            'created_by'=> $session->get('user_id'),
		];
        //dd($edit);
		$this->eventModel->update(['event_id'=>$id],$edit);
		session()->setFlashdata('msg','Data berhasil diubah');
		return redirect()->to('/admin/events/'.$id);
    }

    public function delete($id){
		$this->eventModel->delete($id);
		session()->setFlashdata('msg','Data berhasil dihapus');
		return redirect()->to('/admin/events');
	}
}

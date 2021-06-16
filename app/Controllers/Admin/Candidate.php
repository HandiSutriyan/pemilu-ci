<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\CalonModel;
use App\Models\EventModel;

class Candidate extends BaseController
{
	protected $calonModel;
	protected $eventModel;
    public function __construct(){
		$this->calonModel = new CalonModel;
		$this->eventModel = new EventModel;
    }
	
	public function index()
	{
		$calonData = $this->calonModel->findAll();
		$eventData = $this->eventModel->findAll();
		$data =[
			'title' => 'Data Calon',
			'data_calon'=> $calonData,
			'data_event' => $eventData
        ];
		return view('pages/admin/calon/index', $data);
    }
    
    public function create()
	{
		
		$data =[
            'title' => 'Tambah Calon',
		];
		return view('pages/admin/calon/create', $data);
    }
    
    public function update()
	{
		
		$data =[
            'title' => 'Ubah Data Calon',
        ];
		return view('pages/admin/calon/update', $data);
	}

	// CRUD
	public function save(){
		$session = session();
        $save = [
			'event_id'=> $this->request->getVar('event_id'),
			'name'=> $this->request->getVar('name'),
            'ptk'=> $this->request->getVar('ptk'),
            'angkatan'=> $this->request->getVar('angkatan'),
            'picture'=> $this->request->getVar('picture'),
        ];
        //dd($save);
        $this->calonModel->save($save);
        session()->setFlashdata('msg','Data berhasil ditambahkan');
        return redirect()->to("/admin/events/create");
	}
	public function delete($id){
		$this->calonModel->delete($id);
		session()->setFlashdata('msg','Data berhasil dihapus');
		return redirect()->to('/admin/candidate');
	}
}

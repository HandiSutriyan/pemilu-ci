<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\CalonModel;
use App\Models\DptModel;
use App\Models\EventModel;
use App\Models\KotakSuaraModel;

class Dashboard extends BaseController
{
	public function __construct(){
		$this->calonModel = new CalonModel();
		$this->dptModel = new DptModel();
		$this->suaraModel = new KotakSuaraModel();
		$this->eventModel = new EventModel();
	}

	public function index()
	{
		$total_event = $this->eventModel->findAll();
		$total_pemilih = $this->dptModel->findAll();
		$total_calon = $this->calonModel->findAll();
		$suara_masuk = $this->dptModel->where(['vote_status' => 1])->findAll();
		$data =[
			'title' => 'Dashboard',
			'total_event' => $total_event,
			'total_pemilih' => $total_pemilih,
			'suara_masuk' => $suara_masuk,
			'total_calon' => $total_calon,
        ];
		return view('dashboard', $data);
	}
}

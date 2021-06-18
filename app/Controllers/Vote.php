<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;

use App\Models\CalonModel;
use App\Models\DptModel;
use App\Models\EventModel;
use App\Models\KotakSuaraModel;

class Vote extends BaseController
{
	public function __construct(){
		$this->calonModel = new CalonModel();
		$this->dptModel = new DptModel();
		$this->suaraModel = new KotakSuaraModel();
		$this->eventModel = new EventModel();
	}
	
	public function index($id=NULL)
	{
		$session = session();
		//VALIDASI DATA
		$cekData = $this->dptModel->where(['pemilih_id' => $session->user_id])->first();
		//VALIDASI WAKTU
		$cekwaktu = $this->eventModel->where(['event_id' => $id])->first();
		if($cekwaktu){
			$now = strtotime(Time::now('Asia/Jakarta'));
			$event_start = strtotime($cekwaktu['event_start']);
			$event_stop = strtotime($cekwaktu['event_stop']);
			if($event_start < $now && $event_stop > $now){
				$is_active = 1;
			}else {
				$is_active = 0;
			}
			echo $is_active;
		}
		die;
	
		if($cekData['event_id'] == $id && $cekData['vote_status']==0){
			$calonData = $this->calonModel->where(['event_id' => $id])->findAll();
			//dd($calonData);
			$data = [
				'data_calon' => $calonData,
				'session'=> $session
			];
			return view('vote', $data);
		}else {
			return view('errors/zonk');
		}
	}

	public function proses(){
		$pemilih_id = $this->request->getVar('pemilih_id');
		$event_id = $this->request->getVar('event_id');
		$calon_id = $this->request->getVar('calon_id');
		$suara = [
			'calon_id'=> $calon_id,
			'event_id'=> $event_id
		];
		//dd($data);
		$this->suaraModel->save($suara);
		$this->dptModel->update(['pemilih_id'=>$pemilih_id],['vote_status'=>1]);
		session()->setFlashdata('msg','Data berhasil diubah');
		return redirect()->to('/');
	}
}

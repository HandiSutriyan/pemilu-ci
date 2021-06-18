<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\EventModel;
use App\Models\DptModel;

class Pemilih extends BaseController
{
    public function __construct(){
		$this->eventModel = new EventModel;
		$this->dptModel = new DptModel;
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
	
	public function proses_import(){
		$validation =  \Config\Services::validation();
	
		$file = $this->request->getFile('filedpt');
		$event_id = $this->request->getVar('event_id');
	
		// ambil extension dari file excel
		$extension = $file->getClientExtension();
			
		// format excel 2007 ke bawah
		if('xls' == $extension){
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
		// format excel 2010 ke atas
		} else {
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		
		$spreadsheet = $reader->load($file);
		$data = $spreadsheet->getActiveSheet()->toArray();
		$dummy = array();

		foreach($data as $idx => $col){
			
			// lewati baris ke 0 pada file excel
			// dalam kasus ini, array ke 0 adalahpara title
			if($idx == 0) {
				continue;
			}
			
			// get trx_date from excel
			$username       = $col[1];
			// tampilkan harga product berdasarkan product_id menggunakan function getTrxPrice()
			$name     = $col[2];
			$ptk    = $col[3];
			$angkatan     = $col[4];
			$password   = $col[5];

			$datas = [
				"event_id"    => intval($event_id),
				"username"      => $username,
				"name"     => $name,
				"ptk" => $ptk,
				"angkatan" =>  $angkatan,
				"user_password" => password_hash(strval($password), PASSWORD_DEFAULT),
			];
			array_push($dummy,$datas);
		}

			//dd($dummy);
			$this->dptModel->insertBatch($dummy);
			session()->setFlashdata('msg', 'Imported Transaction successfully');
			return redirect()->to(base_url('/admin/pemilih')); 
			
		
	}
 
}

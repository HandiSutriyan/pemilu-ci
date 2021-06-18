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
			'validation' => \Config\Services::validation(),
			'data_calon'=> $calonData,
			'data_event' => $eventData
        ];
		return view('pages/admin/calon/index', $data);
    }
    
    public function create()
	{
		$eventData = $this->eventModel->findAll();
		$data =[
			'title' => 'Tambah Calon',
			'validation' => \Config\Services::validation(),
			'data_event' => $eventData
		];
		return view('pages/admin/calon/create', $data);
    }
    
    public function detail($id)
	{
		$calonData = $this->calonModel->getCalonById($id);
		$eventData = $this->eventModel->findAll();
		$data =[
			'title' => 'Ubah Data Calon',
			'validation' => \Config\Services::validation(),
			'data_calon' => $calonData,
			'data_event' => $eventData
        ];
		return view('pages/admin/calon/update', $data);
	}

	// CRUD
	public function save(){
		$session = session();

		// VALIDASI
		if(!$this->validate([
			'picture'=>[
				'rules'=>'max_size[picture,2048]|is_image[picture]|mime_in[picture,image/jpg,image/jpeg,image/png]',
				'errors'=>[
					'max_size'=> 'Ukuran file terlalu besar, maksimal 2 MB',
					'is_image'=> 'Format file tidak dizinkan',
					'mime_in'=>'Format file tidak dizinkan',
				]
			]

		])){
			return redirect()->to('/admin/candidate/create')->withInput();
		}


		//AMBIL GAMBAR
		$fileFoto = $this->request->getFile('picture');
		// dd($fileLogo);
		if($fileFoto->getError()==4){
			$namaFoto = 'default.jpg';
		}else {
			//GENERATE RANDOM NAME
			$namaFoto= $fileFoto->getRandomName();
			//PINDAHKAN GAMBAR
			$fileFoto->move('uploads/img/',$namaFoto);
		}

        $save = [
			'event_id'=> $this->request->getVar('event_id'),
			'name'=> $this->request->getVar('name'),
            'ptk'=> $this->request->getVar('ptk'),
            'angkatan'=> $this->request->getVar('angkatan'),
            'picture'=> $namaFoto,
        ];
        //dd($save);
        $this->calonModel->save($save);
        session()->setFlashdata('msg','Data berhasil ditambahkan');
        return redirect()->to("/admin/candidate/create");
	}

	public function update($id){
	
		// VALIDASI
		if(!$this->validate([
			'picture'=>[
				'rules'=>'max_size[picture,2048]|is_image[picture]|mime_in[picture,image/jpg,image/jpeg,image/png]',
				'errors'=>[
					'max_size'=> 'Ukuran file terlalu besar, maksimal 2 MB',
					'is_image'=> 'Format file tidak dizinkan',
					'mime_in'=>'Format file tidak dizinkan',
				]
			]

		])){
			return redirect()->to('/admin/candidate/'.$id)->withInput();
		}
		
		//AMBIL GAMBAR
		$fileFoto = $this->request->getFile('picture');
		$fileLama = $this->request->getVar('fotoLama');
	
		if($fileFoto->getError()==4){
			$namaFoto = $fileLama;
		}else {
			//GENERATE RANDOM NAME
			$namaFoto = $fileFoto->getRandomName();
			//PINDAHKAN GAMBAR
			$fileFoto->move('uploads/img/',$namaFoto);
			if($fileLama != 'default.jpg' && $fileLama != ''){
				unlink('uploads/img/'.$this->request->getVar('fotoLama'));
			}
		}

		$edit = [
			'event_id'=> $this->request->getVar('event_id'),
			'name'=> $this->request->getVar('name'),
            'ptk'=> $this->request->getVar('ptk'),
            'angkatan'=> $this->request->getVar('angkatan'),
            'picture'=> $namaFoto,
        ];
		//dd($edit);
		$this->calonModel->update(['id'=>$id],$edit);
		session()->setFlashdata('msg','Data berhasil diubah');
		return redirect()->to('/admin/candidate/'.$id);
	}

	public function delete($id){
		//CARI GAMBAR
		$foto = $this->calonModel->getCalonById($id);
		//HAPUS GAMBAR
		if($foto['picture'] != 'default.jpg'){
			unlink('uploads/img/'.$foto['picture']);
		}
		$nama = $foto['name'];
		$this->calonModel->delete($id);
		session()->setFlashdata('msg','Data '.$nama.' berhasil dihapus');
		return redirect()->to('/admin/candidate');
	}
}

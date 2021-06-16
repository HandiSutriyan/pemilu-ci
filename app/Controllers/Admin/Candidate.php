<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Candidate extends BaseController
{
	public function index()
	{
		
		$data =[
            'title' => 'Data Calon',
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
}

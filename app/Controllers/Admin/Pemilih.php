<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Pemilih extends BaseController
{
	public function index()
	{
		
		$data =[
            'title' => 'Data Pemilih Tetap',
        ];
		return view('pages/admin/dpt/index', $data);
    }
    
    public function create()
	{
		//return view('pages/admin/dpt/create');
    }
    
    public function update()
	{
		//return view('pages/admin/dpt/update');
	}
}

<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Pemilih extends BaseController
{
	public function index()
	{
		return view('pages/admin/dpt/index');
    }
    
    public function create()
	{
		return view('pages/admin/dpt/create');
    }
    
    public function update()
	{
		return view('pages/admin/dpt/update');
	}
}

<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Candidate extends BaseController
{
	public function index()
	{
		return view('pages/admin/calon/index');
    }
    
    public function create()
	{
		return view('pages/admin/calon/create');
    }
    
    public function update()
	{
		return view('pages/admin/calon/update');
	}
}

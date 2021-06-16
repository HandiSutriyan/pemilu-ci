<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Events extends BaseController
{
	public function index()
	{
		return view('pages/admin/events/list');
    }
    public function create(){
        return view('pages/admin/events/create');
    }
    public function update(){
        return view('pages/admin/events/update');
    }
}

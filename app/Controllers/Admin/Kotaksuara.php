<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Kotaksuara extends BaseController
{
	public function index()
	{
		return view('pages/result/index');
    }
}

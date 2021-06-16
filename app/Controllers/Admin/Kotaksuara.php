<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Kotaksuara extends BaseController
{
	public function index()
	{
		
		$data =[
            'title' => 'Perolehan Suara Masuk',
        ];
		return view('pages/result/index', $data);
    }
}

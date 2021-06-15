<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class LoginAdmin extends BaseController
{
	public function index()
	{
		return view('login-admin');
	}
}

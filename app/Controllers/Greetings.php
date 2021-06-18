<?php

namespace App\Controllers;

class Greetings extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
    }
    public function notfound()
	{
		return view('errors/not-found');
    }
    public function timeover()
	{
		return view('errors/timeover');
    }
    public function forbidden()
	{
		return view('errors/forbidden');
    }
    public function voted()
	{
        $data = [
            'session'=> session()->user_name
        ];
        return view('errors/voted',$data);
	}
}

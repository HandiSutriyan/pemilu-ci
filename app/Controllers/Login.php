<?php

namespace App\Controllers;
use App\Models\DptModel;
use App\Models\UserModel;

class Login extends BaseController
{
	public function index()
	{
		return view('login');
    }
    
    public function auth()
    {
        $session = session();
        $dpt_model = new DptModel();
        $user_model = new UserModel();
        $username = $this->request->getVar('user_name');
        $password = $this->request->getVar('user_password');
        $is_pemilih = $dpt_model->where('username',  $username)->first();
        $is_user = $user_model->where(['user_name' => $username, 'role'=> 'admin'])->first();
        if($is_user){
            $data = $is_user;
        }else{
            $data = $is_pemilih;
        }
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['username'],
                    'user_email'    => $data['user_email'],
                    'user_role'    =>  $data['user_role'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/vote');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'User not Found');
            return redirect()->to('/login');
        }
    }
}

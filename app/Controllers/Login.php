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
        $is_user = $user_model->where(['username' => $username, 'user_role'=> 'admin'])->first();
        //dd($is_pemilih);
        if($is_user){
            $data = $is_user;
        }else{
            $data = $is_pemilih;
        }

        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);

            if($is_user){
                $id = $data['user_id'];
                $redirect = '/admin';
            }else{
                $id = $data['pemilih_id'];
                $redirect = '/vote/'.$data['event_id'];
            }

            if($verify_pass){
                $ses_data = [
                    'user_id'       => $id,
                    'user_name'     => $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to($redirect);
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'User not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}

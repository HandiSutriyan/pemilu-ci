<?php

namespace App\Controllers;
use App\Models\DptModel;

class Login extends BaseController
{
    protected $dptModel;
    protected $session;
    public function __construct(){
        $this->dptModel = new DptModel;
        $this->session = session();
    }

    public function index(){
		return view('login');
    }

    public function process(){
        $username = $this->request->getVar('user_name');
        $password = $this->request->getVar('user_password');
        $data = $this->dptModel->where('username', $username)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'pemilih_id'       => $data['pemilih_id'],
                    'user_name'     => $data['username'],
                    'logged_in'     => TRUE
                ];
                $this->session->set($ses_data);
                return redirect()->to('/vote');
            }else{
                $this->session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $this->session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}

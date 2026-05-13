<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function index()
    {   $session = session();
        $user="111";
        $pass="222";
        //$data['user']="";
        $data['pass']="";
        if($session->get('user')==$user)
            return redirect()->to( base_url('/ura') );
        else
            return view('login');
    }
    public function login()
    {   
        $session = session();
        $user="111";
        $pass="222";
        if(!empty($this->request->getPost('user'))&&(!empty($this->request->getPost('pass')))){
            if(($this->request->getPost('user')==$user)&&($this->request->getPost('pass')==$pass)){
                if(!empty($this->request->getPost('rememberme'))){
                    $session->set("user",$user);
                     return redirect()->to( base_url('/ura') );
                }
                return redirect()->to( base_url('/ura') );
            }else 
                echo 'Username/Password Invalid';
        }else
            echo 'You must supply a username and password.';
    }   
    public function ura()
    {
        $session = session();
        $data['user']=$session->get('user');
        return view('ura',$data);
    }
     public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to( base_url('/') );
    }
}

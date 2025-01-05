<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Login extends BaseController

{
    
    public function index()
    {
        echo view('common/header');
        echo view('login');
        echo view('common/footer');
    }
    public function do_login()
    {
        $userModel = new userModel();
        
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $result = $userModel->where('email', $email)->first();

        if( $result->id > 0){

            if (password_verify($password, $result->password)) {
                
                $this->session->set("user", $result);
                return redirect()->to('/dashboard');

            }
            else{
                
                echo '<p style="font-size: 24px; font-weight: bold; color: green; text-align: center">Invalid email or password</p>';

            }
        }
        else{
            
            echo '<p style="font-size: 24px; font-weight: bold; color: green; text-align: center">Invalid email or password</p>';
        }

    }
}
    

<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('register');
        echo view('common/footer');
    }
    public function do_register(){
        
        $userModel = new UserModel();
        
        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');
        $date_of_birth = $this->request->getPost('date_of_birth');
        $contact = $this->request->getPost('contact');
        $emergency_contact = $this->request->getPost('emergency_contact');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $password = password_hash($password, PASSWORD_BCRYPT);
        
        $data = ['firstname'=>$firstname, 'lastname'=>$lastname, 'date_of_birth'=>$date_of_birth, 'contact'=>$contact,  'emergency_contact'=>$emergency_contact, 'email'=>$email, 'password'=>$password];

        $r = $userModel->insert($data);
        if( $r )
        {
            
            echo '<p style="font-size: 24px; font-weight: bold; color: green; text-align: center">"Congratulations! Your account has been created successfully."</p>';
        }
        else {
            
            echo "Error during registration";
        }
    }
}

<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('home');
        echo view('common/footer');
        
        //return view('home');

        
    }
}

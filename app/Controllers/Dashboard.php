<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('common/header');
        return view('dashboard');
    }
}

<?php

namespace App\Controllers;

use App\Core\Controller;

class Login extends Controller
{

    public function index()
    {
        $this->login('index');
    }

    public function btn_login()
    {
        header("dashboard");
    }
}
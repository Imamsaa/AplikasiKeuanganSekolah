<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {
        $data['title'] = "Halaman Login";
        return view('login', $data);
    }
}

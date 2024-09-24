<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index(): string
    {
        $data['title'] = "Halaman Register";
        return view('register', $data);
    }
}

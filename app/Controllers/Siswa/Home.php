<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = "Home Siswa";
        return view('pages/siswa/home', $data);
    }
}

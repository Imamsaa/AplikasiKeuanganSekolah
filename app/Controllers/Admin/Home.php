<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = "Home Admin";
        return view('pages\admin\home', $data);
    }
}

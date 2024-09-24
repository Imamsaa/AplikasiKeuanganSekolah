<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index(): string
    {
        $data['title'] = "Halaman Kosong";
        return view('pages\admin\page', $data);
    }
}

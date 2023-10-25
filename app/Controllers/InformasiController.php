<?php

namespace App\Controllers;

class InformasiController extends BaseController
{
    public function index(): string
    {
        $data['title'] = "Informasi";
        return view('pages/informasi', $data);
    }
}

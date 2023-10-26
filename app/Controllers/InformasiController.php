<?php

namespace App\Controllers;

class InformasiController extends BaseController
{
    public function index(): string
    {
        return view('pages/informasi');
    }
}

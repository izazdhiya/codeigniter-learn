<?php

namespace App\Controllers;

class AktivitasController extends BaseController
{
    public function index(): string
    {
        $data['title'] = "Aktivitas";
        return view('pages/aktivitas', $data);
    }
}

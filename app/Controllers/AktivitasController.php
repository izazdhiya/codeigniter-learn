<?php

namespace App\Controllers;

class AktivitasController extends BaseController
{
    public function index(): string
    {
        return view('pages/aktivitas');
    }
}

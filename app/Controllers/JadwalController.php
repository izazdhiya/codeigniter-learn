<?php

namespace App\Controllers;

class JadwalController extends BaseController
{
    public function index(): string
    {
        return view('pages/jadwal');
    }
}

<?php

namespace App\Controllers;

class JadwalController extends BaseController
{
    public function index(): string
    {
        $data['title'] = "Jadwal";
        return view('pages/jadwal', $data);
    }
}

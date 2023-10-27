<?php

namespace App\Controllers;

class JadwalController extends BaseController
{
    public function index(): string
    {
        if (auth()->loggedIn()) {
            return view('pages/jadwal');
        }

        return view('pages/auth/login');
    }
}

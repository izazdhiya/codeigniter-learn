<?php

namespace App\Controllers;

class InformasiController extends BaseController
{
    public function index(): string
    {
        if (auth()->loggedIn()) {
            return view('pages/informasi');
        }

        return view('pages/auth/login');
    }
}

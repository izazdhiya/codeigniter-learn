<?php

namespace App\Controllers;

class AktivitasController extends BaseController
{
    public function index(): string
    {
        if (auth()->loggedIn()) {
            return view('pages/aktivitas');
        }

        return view('pages/auth/login');
    }
}

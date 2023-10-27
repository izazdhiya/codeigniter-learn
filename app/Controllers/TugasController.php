<?php

namespace App\Controllers;

class TugasController extends BaseController
{
    public function index(): string
    {
        if (auth()->loggedIn()) {
            return view('pages/tugas');
        }

        return view('pages/auth/login');
    }
}

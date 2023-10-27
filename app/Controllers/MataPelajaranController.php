<?php

namespace App\Controllers;

class MataPelajaranController extends BaseController
{
    public function index(): string
    {
        if (auth()->loggedIn()) {
            return view('pages/mata-pelajaran');
        }

        return view('pages/auth/login');
    }
}

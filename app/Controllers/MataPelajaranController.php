<?php

namespace App\Controllers;

class MataPelajaranController extends BaseController
{
    public function index(): string
    {
        return view('pages/mata-pelajaran');
    }
}

<?php

namespace App\Controllers;

class MataPelajaranController extends BaseController
{
    public function index(): string
    {
        $data['title'] = "Mata Pelajaran";
        return view('pages/mata-pelajaran', $data);
    }
}

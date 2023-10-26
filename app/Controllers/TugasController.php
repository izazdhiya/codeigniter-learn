<?php

namespace App\Controllers;

class TugasController extends BaseController
{
    public function index(): string
    {
        return view('pages/tugas');
    }
}

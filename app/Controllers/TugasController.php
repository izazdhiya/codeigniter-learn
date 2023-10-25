<?php

namespace App\Controllers;

class TugasController extends BaseController
{
    public function index(): string
    {
        $data['title'] = "Tugas";
        return view('pages/tugas', $data);
    }
}

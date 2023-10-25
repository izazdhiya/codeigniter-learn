<?php

namespace App\Controllers;

class ProfileController extends BaseController
{
    public function index(): string
    {
        $data['title'] = "Profil";
        return view('pages/profile', $data);
    }
}

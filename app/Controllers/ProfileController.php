<?php

namespace App\Controllers;

class ProfileController extends BaseController
{
    public function index(): string
    {
        if (auth()->loggedIn()) {
            return view('pages/profile');
        }

        return view('pages/auth/login');
    }
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Templates/header').view('Pages/starter').view('Templates/footer');
    }
}

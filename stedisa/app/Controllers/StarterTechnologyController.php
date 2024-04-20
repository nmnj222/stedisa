<?php

namespace App\Controllers;

class StarterTechnologyController extends BaseController
{
    public function index(): string
    {
        return view('Templates/header').view('Pages/starter-technology').view('Templates/footer');
    }
}
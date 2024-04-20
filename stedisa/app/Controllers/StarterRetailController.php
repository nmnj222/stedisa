<?php

namespace App\Controllers;

class StarterRetailController extends BaseController
{
    public function index(): string
    {
        return view('Templates/header').view('Pages/starter-retail').view('Templates/footer');
    }
}
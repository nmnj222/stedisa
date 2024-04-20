<?php

namespace App\Controllers;

class StarterBeautyController extends BaseController
{
    public function index(): string
    {
        return view('Templates/header').view('Pages/starter-beauty').view('Templates/footer');
    }
}
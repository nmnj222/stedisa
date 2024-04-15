<?php

namespace App\Controllers;

class ContactController extends BaseController
{
    public function index(): string
    {
        return view('Pages/contact').view('Templates/footer');
    }
}
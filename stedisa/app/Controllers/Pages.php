<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
class Pages extends BaseController
{
    public function index(): string
    {
        return view('Pages/starter');
    }

}



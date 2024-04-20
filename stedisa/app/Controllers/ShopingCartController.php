<?php

namespace App\Controllers;

class ShopingCartController extends BaseController
{
    public function index(): string
    {
        return view('Pages/shoping-cart').view('Templates/footer');
    }
}
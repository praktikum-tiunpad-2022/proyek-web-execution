<?php

namespace App\Controllers;
use App\Models\IceCreamModel;

class Pages extends BaseController
{
    public function loginPage()
    {
        return view('login');
    }

    public function homePage()
    {
        return view('home');
    }

    public function orderPage()
    {
        return view('order');
    }

    public function productPage()
    {
        return view('product');
    }

    public function registerPage()
    {
        return view('register');
    }
}

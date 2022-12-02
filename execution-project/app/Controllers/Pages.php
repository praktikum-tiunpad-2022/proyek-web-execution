<?php

namespace App\Controllers;

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

    public function order()
    {
        return view('order');
    }
}

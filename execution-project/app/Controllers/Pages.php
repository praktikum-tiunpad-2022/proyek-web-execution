<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function indexHome()
    {
        return view('home');
    }

    public function order()
    {
        return view('order');
    }
}

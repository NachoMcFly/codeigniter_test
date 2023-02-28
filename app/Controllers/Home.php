<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('main_view');
    }

    public function test()
    {
        return view('test_message');
    }
}

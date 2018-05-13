<?php

namespace inha_store\Http\Controllers;

use Illuminate\Http\Request;
use inha_store\ContactMess;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function categories()
    {
        return view('categories');
    }

    public function auth()
    {
        return view('auth');
    }

    public function payment()
    {
        return view('payment');
    }
}

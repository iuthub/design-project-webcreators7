<?php

namespace inha_store\Http\Controllers;

use inha_store\Models\Order;
use Illuminate\Http\Request;
use inha_store\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function display() {
            return view('templates.admin.layout');
    }

}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BerandaController extends BaseController
{
    public function index()
    {
        return view('beranda/index');
    }
}

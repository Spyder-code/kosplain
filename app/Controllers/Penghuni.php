<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Penghuni extends BaseController
{
    public function home()
    {
        return view('penghuni/home');
    }
}

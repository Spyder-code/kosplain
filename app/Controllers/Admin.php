<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Irsyadulibad\DataTables\DataTables;

class Admin extends BaseController
{
    public function dashboard()
    {
        // $query = db_connect()->table('users');
        // return DataTables::use($query)->make();
        return view('admin/dashboard');
    }

    public function data_penghuni()
    {
        return view('admin/data_penghuni');
    }

    public function data_keluhan()
    {
        return view('admin/data_keluhan');
    }

    public function detail_keluhan()
    {
        return view('admin/detail_keluhan');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlling extends Controller
{
    public function index()
    {
        return view('layouts/admin/controlling-admin');
    }
}

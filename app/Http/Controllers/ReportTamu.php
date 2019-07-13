<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportTamu extends Controller
{
    public function index()
    {
        return view('layouts/tamu/report-tamu');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTamu extends Controller
{
    public function index()
    {
        return view('layouts/tamu/dashboard-tamu');
    }
    public function logintamu(Request $request)
    {
        return view('layouts/tamu/dashboard-tamu');
    }
    public function logouttamu()
    {
        session()->flush();
        return redirect ('/login');
    }
}

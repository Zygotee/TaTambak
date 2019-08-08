<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlling extends Controller
{
    public function index()
    {
        $data_motordc = Status::select('nilai','kondisi')->get();
        
        return view('layouts/admin/dashboard-admin',
        [
            'aktuator' => $data_motordc        
        
        ]
    );
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Air;
use App\pH;
use App\Suhu;
use App\Status;
use App\Admin;

class FrontendController extends Controller
{
    public function index()
    {
        $air = Air::orderBy('waktu', 'desc')->first();
        $ph = pH::orderBy('waktu', 'desc')->first();
        $suhu = Suhu::orderBy('waktu', 'desc')->first();
        $data = [
            'air' => $air,
            'ph' => $ph,
            'suhu' => $suhu
        ];

        return view('layouts.frontend.index', compact('data'));
    }
    
    public function about()
    {
        return view ('layouts.frontend.about');
    }
}

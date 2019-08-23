<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Air;
use App\pH;
use App\Suhu;

class Landing extends Controller
{
    public function masuklanding()
    {
        {
             $data_jarak = Air::select('id', 'waktu', 'nilai')->orderBy('waktu', 'desc')->get();
             $data_suhu = Suhu::orderBy('waktu','desc')->get();
             $data_ph = pH::orderBy('waktu', 'desc')->get();
            return view(
                'layouts/tamu/landing',
                [
                    'jarak' => $data_jarak,
                    'suhu' => $data_suhu,
                    'pH' => $data_ph
                ]
            );
        }
    }
    public function tentang()
    {
        return view ('layouts/tamu/tentang');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use App\Air;
use App\pH;
use App\Suhu;

class Dashboard extends Controller
{
    public function index()
    {

        $data =[
            'admin' => Admin::get(),

        ];
        return view('layouts/admin/dashboard-admin', $data);
    }
    public function login()
    {
        return view('layouts/admin/login');
    }
    public function loginproses(Request $request)
    {
        // dd($request->all());
        $email = $request['email'];
        $password = $request['password'];
        $admin= Admin::where('email', $email)->get();
        if(count($admin)==1){
            $data= Admin::where('email', $email)->first();
            if(Hash::check($password, $data->password)){
                session([
                    'nama'=> $data->nama, 'email' => $data->email
                ]);
                return redirect ('/admin');
            }else{
                echo 'Passowrd salah';
            }

        }else{
            echo 'Email tidak terdaftar';
        }
    }
    public function logout()
    {
        session()->flush();
        return redirect ('/login');
    }
    public function grafikAir()
    {

        $data_jarak = Air::select('nilai', 'waktu')->get();
        return view('layouts/admin/grafik/grafik_air-admin',
            [
                'jarak' => $data_jarak,
                'jar' => $data_jarak

            ]
    
    );
}
    public function grafikPh()
    {
        $data_ph = pH::select('nilai', 'waktu')->get();
        
        return view('layouts/admin/grafik/grafik_ph-admin',
        [
            'ph' => $data_ph,
            'phh' => $data_ph 
        ]
    
    );
    }
    public function grafikSuhu()
    {
        $data_suhu = suhu::select('nilai', 'waktu')->get();
        return view('layouts/admin/grafik/grafik_suhu-admin',
    [
        'suhu' => $data_suhu,
        'suhuu' => $data_suhu

    ]
    
    );
    }
    public function tabelAir()
    {
        $data_jarak = Air::select('id', 'waktu', 'nilai')->get();
        return view('layouts/admin/datatabel/tabel_air-admin',
            [
                'jarak' => $data_jarak
            ]
        ); 
    }
    public function tabelPh()
    {
        $data_ph = pH::all();
        return view('layouts/admin/datatabel/tabel_ph-admin',
            [
                'pH' => $data_ph

             ]
        ); 
    }
    public function tabelSuhu()
    {
        $data_suhu = Suhu::all();
        return view('layouts/admin/datatabel/tabel_suhu-admin',
            [
                'suhu' => $data_suhu

             ]
        
        ); 
    }
}

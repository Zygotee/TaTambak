<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admin;

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
        return view('layouts/admin/grafik/grafik_air-admin');
    }
    public function grafikPh()
    {
        return view('layouts/admin/grafik/grafik_ph-admin');
    }
    public function grafikSuhu()
    {
        return view('layouts/admin/grafik/grafik_suhu-admin');
    }
    public function tabelAir()
    {
        return view('layouts/admin/datatabel/tabel_air-admin'); 
    }
    public function tabelPh()
    {
        return view('layouts/admin/datatabel/tabel_ph-admin'); 
    }
    public function tabelSuhu()
    {
        return view('layouts/admin/datatabel/tabel_suhu-admin'); 
    }
}

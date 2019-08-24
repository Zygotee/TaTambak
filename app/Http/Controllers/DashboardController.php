<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Salman\Mqtt\MqttClass\Mqtt;
use App\User;
use App\Air;
use App\pH;
use App\Suhu;
use App\Status;
use App\Gallery;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //Control
        $data_motordc = Status::pluck('nilai')->first();
        $air = Air::orderBy('waktu', 'desc');
        $pH = pH::orderBy('waktu', 'desc');
        $suhu = Suhu::orderBy('waktu', 'desc');
        $data = [
            'admin' => User::get(),
            'd_air' => $air->pluck('nilai')->first(),
            'd_pH' => floatval($pH->pluck('nilai')->first()),
            'd_suhu' => $suhu->pluck('nilai')->first(),
            'akt' => $data_motordc
        ];
        // dd($data['d_air']);
        return view('layouts/admin/dashboard-admin', $data);
    }

    public function grafikAir()
    {

        $data_jarak = Air::select('nilai', 'waktu')->get();
        // dd($data_jarak);
        return view(
            'layouts/admin/grafik/grafik_air-admin',
            [
                'jarak' => $data_jarak,
                'jar' => $data_jarak

            ]

        );
    }
    public function grafikPh()
    {
        $data_ph = pH::select('nilai', 'waktu')->get();

        return view(
            'layouts/admin/grafik/grafik_ph-admin',
            [
                'ph' => $data_ph,
                'phh' => $data_ph
            ]

        );
    }
    public function grafikSuhu()
    {
        $data_suhu = suhu::select('nilai', 'waktu')->get();
        return view(
            'layouts/admin/grafik/grafik_suhu-admin',
            [
                'suhu' => $data_suhu,
                'suhuu' => $data_suhu

            ]

        );
    }
    public function tabelAir()
    {
        $data_jarak = Air::select('id', 'waktu', 'nilai')->orderBy('waktu', 'desc')->get();
        return view(
            'layouts/admin/datatabel/tabel_air-admin',
            [
                'jarak' => $data_jarak
            ]
        );
    }

    public function tabelPh()
    {
        $data_ph = pH::select('id','waktu','nilai')->orderBy('waktu', 'desc')->get();
        $last_ph = pH::select('id','waktu','nilai')->orderBy('waktu', 'desc')->first();
        return view(
            'layouts/admin/datatabel/tabel_ph-admin',
            [
                'pH' => $data_ph,
                'last_pH' => $last_ph

            ]
        );
    }

    public function jsonPh()
    {
        // $data_ph = pH::select('id','waktu','nilai')->orderBy('waktu', 'desc')->get();
        $last_ph = pH::select('id','waktu','nilai')->orderBy('waktu', 'desc')->first();
        return response()->json($last_ph);
    }

    public function jsonsuhu()
    {
        // $data_ph = pH::select('id','waktu','nilai')->orderBy('waktu', 'desc')->get();
        $last_suhu = suhu::select('id','waktu','nilai')->orderBy('waktu', 'desc')->first();
        return response()->json($last_suhu);
    }

    public function tabelSuhu()
    {
        $data_suhu = Suhu::select('id','waktu','nilai')->orderBy('waktu', 'desc')->get();
        return view(
            'layouts/admin/datatabel/tabel_suhu-admin',
            [
                'suhu' => $data_suhu

            ]

        );
    }

    public function Control(Request $request)
    {
        $mqtt = new Mqtt();
        if(isset($request->control)){
            if($request->control == 1){
                $hasil = 'Nyala';
            }
            else{
                $hasil = 'Mati';
            }

            $status = Status::find(1);

            $status->nilai = $request->control;
            $status->kondisi = $hasil;
                    
            $status->save();  
            
            
            $output = $mqtt->ConnectAndPublish("/Kontrol/MotorDC",$request->control);
            if($output === true){
                echo "berubah";
            }
            else{
                echo "gagal";
            }
            
            return redirect()->back();
        }
        
    }

    public function ReadImages()
    {
        $datas = Gallery::get();
        return view('layouts.admin.gallery.index', compact('datas'));
    }

    public function ReadAddImages()
    {
        return view('layouts.admin.gallery.add');
    }

    public function PostImages(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png|max:2048'
        ]);

        $foto = $request->file('foto');
        $filename = $request->nama.'_'.$foto->getClientOriginalName();
        $request->file('foto')->move('public/storage', $filename);
        
        $image = new Gallery();
        $image->nama = $request->nama;
        $image->foto = $filename;
        $image->save();

        return redirect(route('images.read'))->with('success', 'Gambar berhasil ditambah');
    }

    public function DeleteImages(Request $request)
    {
        $data = Gallery::find($request->id);
        $data->delete();

        return back()->with('success', 'Gambar berhasil dihapus');
    }

    public function ReadEditImages($id)
    {
        $data = Gallery::find($id);

        return view('layouts.admin.gallery.edit', compact('data'));
    }

    public function PostEditImages(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png|max:2048'
        ]);

        $foto = $request->file('foto');
        $filename = $request->nama.'_'.$foto->getClientOriginalName();
        $request->file('foto')->move('public/storage', $filename);
        
        $image = Gallery::find($request->id);
        $image->nama = $request->nama;
        $image->foto = $filename;
        $image->save();

        return back()->with('success', 'Data berhasil diupdate');
    }
   
}

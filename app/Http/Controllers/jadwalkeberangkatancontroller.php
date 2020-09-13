<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwalKeberangkatanModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\hargamodel;
use App\Histori;
use App\SimpanPembayaran;
use App\LaporanModel;
use App\biayaperjalanan_model;
// use App\PilihKursiModel;
use PhpParser\Node\Stmt\Return_;

class jadwalkeberangkatancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $data = jadwalKeberangkatanModel::all();
        // return $data;
        $hargamodel     =  hargamodel::all();
        $harga          =  json_encode($hargamodel);
        $booking        =  DB::table('pilih_kursi')->orderBy('No_kursi','asc')->get();
        return view('jadwalkeberangkatan',compact('harga','booking'));
        //
    }
    public function history()
    {
        $Histori = DB::table('jadwal')->where('id_user', Auth::user()->id)->get();
        return view('Histori',compact('Histori'));
    }
    public function datapemesanan()
    {
        $datapemesanan = DB::table('jadwal')->where('id_user', Auth::user()->id)->get();
        if (Auth::user()->level == "admin") {
            $datapemesanan = DB::table('jadwal')->get();
        } else {
            $datapemesanan = DB::table('jadwal')->where('id_user', Auth::user()->id)->get();
        }
        // return $datapemesanan;
        return view('tampildatapemesanan',compact('datapemesanan'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function laporan()
    {
        $LaporanModel = LaporanModel::all();
        $biayaperjalanan_model = biayaperjalanan_model::all();
        return view('laporan',compact('LaporanModel','biayaperjalanan_model'));
    }
    public function laporan_filter(Request $request) {
        $filter                 =        $request->filter;
        $LaporanModel           =        DB::table('jadwal')->where('Tanggalend', $filter)->get();
        $biayaperjalanan_model  =        DB::table('biayaperjalan')->where('tanggal',$filter)->get();
        return view('tampilkanlaporan',compact('LaporanModel','biayaperjalanan_model'));
    }
    public function store(Request $request)
    {
        $data= new jadwalKeberangkatanModel();
        $data->nama_pembeli =$request->nama;
        $data->jadwal_keberangkatan_start =$request->jadwalkeberangkatan;
        $data->jamend =$request->jam;
        $data->Berangkat_Start =$request->berangkat;
        $sort        =           strtotime($request->tanggal);
        $month       =           date("F", $sort);
        $year        =           date("Y", $sort);
        $data->Tanggalend = $year.'-'.$month;
        $data->jumlah_tiket =$request->jumlahtiket;
        $data->harga_tiket =$request->hargatiket;
        $data->id_boking                =        $request->id_kursi;
        $data_ketersediaan              =        array();
        if ($data->Cek_ketersediaan_kursi == null) {
            $data_obj                       =        [
                'taggal_berangkat'  =>      $request->tanggal,
                'jam'               =>      $request->jam,
                'no_kursi'          =>      $request->no_kursi
            ];
            array_push($data_ketersediaan,$data_obj);
        }

        $data->no_kursi    =        $request->no_kursi;
        $data->id_user     =        Auth::user()->id;
        DB::table('pilih_kursi')->where('id',$request->id_kursi)->update(['status_kursi' => 'booking','No_kursi' => $request->no_kursi, 'Cek_ketersediaan_kursi' => json_encode($data_ketersediaan)]);
        $data->save();
        // return $data;
        return redirect('pembayaran?id_jadwal='.$data->id);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Pembayaran(Request $request) {
        $pembayaran          =       jadwalKeberangkatanModel::find($request->id_jadwal);
        return view('pembayaran',compact('pembayaran'));
    }

    public function Kode_pembayaran(Request $request) {
        $data_pembeli           =       jadwalKeberangkatanModel::find($request->id);
        $pembayaran             =       $request->pembayaran;
        $chars = "abcdefghijkmnopqrstuvwxyz023456789";
        srand((double)microtime()*1000000);
        $i    = 0;
        $code = '' ;

        while ($i <= 10) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $code = $code . $tmp;
            $i++;
        }
        $generate       =        "ubedcode".$code;
        // return $data_pembeli;
        $data_simpan                         =        new SimpanPembayaran();
        $data_simpan->nama_pembeli           =        $data_pembeli->nama_pembeli;
        $data_simpan->kode_generate          =        $generate;
        $data_simpan->metodebayar            =        $pembayaran;
        $data_simpan->harga                  =        $data_pembeli->harga_tiket;
        $data_simpan->status                 =        "belum_dibayar";
        $data_simpan->save();

        return view('kode_pembayaran',compact('data_pembeli','generate','pembayaran'));
    }
}

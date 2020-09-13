<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\biayaperjalanan_model;



class tambahbiayacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tambahbiaya');



        //
    }
    public function tablebiaya()
    {
        $tabelbiaya= biayaperjalanan_model::all();
        return view('tabelbiayaperjalanan',compact('tabelbiaya'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new biayaperjalanan_model();
        $data->namasupir =$request->namasupir;
        $data->no_polisi=$request->no_polisi;
        $data->bensin =$request->bensin;
        $data->biayatol =$request->biayatol;
        $data->uangmakan =$request->uangmakan;
        $sort        =           strtotime($request->tanggal);
        $month       =           date("F", $sort);
        $year        =           date("Y", $sort);
        $data->tanggal =         $year.'-'.$month;
        $data->save();
        return redirect('tambahbiaya')->with('pesan','data telah disimpan');


        //
    }
        //


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
}

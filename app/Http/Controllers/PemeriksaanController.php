<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(Pemeriksaan::all(),200);
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
    public function insert(Request $request){
        $pemeriksaan = new pemeriksaan;
        $pemeriksaan->ID_PASIEN                 = $request->ID_PASIEN;
        $pemeriksaan->ID_RELAWAN                = $request->ID_RELAWAN;
        $pemeriksaan->TGL_PEMERIKSAAN           = $request->TGL_PEMERIKSAAN;
        $pemeriksaan->KEHAMILAN_KE              = $request->KEHAMILAN_KE;
        $pemeriksaan->KELUHAN                   = $request->KELUHAN;
        $pemeriksaan->TEKANAN_DARAH_SISTOL      = $request->TEKANAN_DARAH_SISTOL;
        $pemeriksaan->TEKANAN_DARAH_DIASTOL     = $request->TEKANAN_DARAH_DIASTOL;
        $pemeriksaan->BERAT_BADAN               = $request->BERAT_BADAN;
        $pemeriksaan->TINGGI_BADAN              = $request->TINGGI_BADAN;
        $pemeriksaan->UMUR_KEHAMILAN            = $request->UMUR_KEHAMILAN;
        $pemeriksaan->TGL_RESPON                = $request->TGL_RESPON;
        $pemeriksaan->RESPONMEDIS               = $request->RESPONMEDIS;
        $pemeriksaan->FOTO                      = $request->FOTO;
        $pemeriksaan->save();
  
        return response()->json([
            "message" => "Registrasi pemeriksaan Berhasil"], 201);

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
}

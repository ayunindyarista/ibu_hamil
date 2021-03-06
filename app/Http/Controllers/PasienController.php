<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(Pasien::all(),200);
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
    public function insert(Request $request)
    {
        //
        $pasien = new Pasien;
        $pasien->NAMA                 = $request->NAMA;
        $pasien->ALAMAT               = $request->ALAMAT;
        $pasien->NO_TELP              = $request->NO_TELP;
        $pasien->TGL_LAHIR            = $request->TGL_LAHIR;
        $pasien->KOTA                 = $request->KOTA;
        $pasien->HISTORI_KESEHATAN    = $request->HISTORI_KESEHATAN;
        $pasien->NIK                  = $request->NIK;
        $pasien->NO_KK                = $request->NO_KK;
        $pasien->save();

        return response()->json([
            "message" => "Registrasi pasien Berhasil"], 201);
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

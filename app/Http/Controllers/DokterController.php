<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(Dokter::all(),200);

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

    public function insert(Request $request){
        $dokter = new Dokter;
        $dokter->NAMA           = $request->NAMA;
        $dokter->ALAMAT         = $request->ALAMAT;
        $dokter->NO_TELP        = $request->NO_TELP;
        $dokter->NIK            = $request->NIK;
        $dokter->KOTA           = $request->KOTA;
        $dokter->INSTANSI_ASAL  = $request->INSTANSI_ASAL;
        $dokter->EMAIL          = $request->EMAIL;
        $dokter->PASSWORD       = $request->PASSWORD;
        $dokter->save();
  
        return response()->json([
            "message" => "Registrasi Dokter Berhasil"], 201);

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

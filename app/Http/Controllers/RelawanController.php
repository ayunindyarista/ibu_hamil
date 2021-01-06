<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Relawan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RelawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(Relawan::all(),200);
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
        $relawan = new Relawan;
        $relawan->NAMA      = $request->NAMA;
        $relawan->ALAMAT    = $request->ALAMAT;
        $relawan->NO_TELP   = $request->NO_TELP;
        $relawan->NIK       = $request->NIK;
        $relawan->EMAIL     = $request->EMAIL;
        $relawan->PASSWORD  = $request->PASSWORD;
        $relawan->save();

        return response()->json([
            "message" => "Registrasi Relawan Berhasil"], 201);
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

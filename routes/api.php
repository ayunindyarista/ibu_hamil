<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//REGISTRASI
 
//REGISTRASI DOKTER
Route::post('/Registrasi/Dokter',\App\Http\Controllers\DokterController::class . '@insert');
//GET DOKTER
Route::get('/Data/Dokter',\App\Http\Controllers\DokterController::class . '@index');

//REGISTRASI RELAWAN
Route::post('/Registrasi/Relawan',\App\Http\Controllers\RelawanController::class . '@insert');
//GET RELAWAN
Route::get('/Data/Relawan',\App\Http\Controllers\RelawanController::class . '@index');

//REGISTRASI PASIEN
Route::post('/Registrasi/Pasien',\App\Http\Controllers\PasienController::class . '@insert');
//GET PASIEN
Route::get('/Data/Pasien',\App\Http\Controllers\PasienController::class . '@index');

//PEMERIKSAAN PASIEN
//PEMERIKSAAN
Route::post('/Pemeriksaan',\App\Http\Controllers\PemeriksaanController::class . '@insert');
//DATA PEMERIKSAAN
Route::get('/Data/Pemeriksaan',\App\Http\Controllers\PemeriksaanController::class . '@index');

Route::post('login', \App\Http\Controllers\API\UserController::class . '@login');
// Route::post('register', \App\Http\Controllers\API\UserController::class . '@register');

Route::group(['middleware' => 'auth:api'], function(){
	Route::post('details', \App\Http\Controllers\API\UserController::class . '@details');
});

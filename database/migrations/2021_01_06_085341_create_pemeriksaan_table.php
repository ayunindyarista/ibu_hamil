<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan', function (Blueprint $table) {
            $table->integer('ID_PEMERIKSAAN')->primary();
            $table->string('ID_PASIEN', 8)->index('MENJALANI_FK');
            $table->string('ID_RELAWAN', 8)->index('MELAKUKAN_FK');
            $table->dateTime('TGL_PEMERIKSAAN');
            $table->integer('KEHAMILAN_KE');
            $table->string('KELUHAN', 1000);
            $table->float('TEKANAN_DARAH_SISTOL', 10, 0);
            $table->float('TEKANAN_DARAH_DIASTOL', 10, 0);
            $table->float('BERAT_BADAN', 10, 0);
            $table->float('TINGGI_BADAN', 10, 0);
            $table->integer('UMUR_KEHAMILAN');
            $table->binary('FOTO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemeriksaan');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->string('ID_PASIEN', 8)->primary();
            $table->string('NAMA', 50);
            $table->string('ALAMAT', 100);
            $table->string('NO_TELP', 12);
            $table->date('TGL_LAHIR');
            $table->string('KOTA', 20);
            $table->string('HISTORI_KESEHATAN', 300);
            $table->string('NIK', 16);
            $table->string('NO_KK', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}

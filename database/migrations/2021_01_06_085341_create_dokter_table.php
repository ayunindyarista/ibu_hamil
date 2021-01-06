<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->string('ID_DOKTER', 8)->primary();
            $table->string('NAMA', 50);
            $table->string('ALAMAT', 100);
            $table->string('NO_TELP', 12);
            $table->string('NIK', 16);
            $table->string('KOTA', 20);
            $table->string('INSTANSI_ASAL', 20);
            $table->string('EMAIL', 30);
            $table->string('PASSWORD', 300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokter');
    }
}

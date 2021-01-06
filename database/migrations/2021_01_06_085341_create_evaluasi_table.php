<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluasi', function (Blueprint $table) {
            $table->integer('ID_EVALUASI')->primary();
            $table->integer('ID_PEMERIKSAAN')->index('MEMILIKI_FK');
            $table->string('ID_DOKTER', 8)->index('MELAKUKAN1_FK');
            $table->dateTime('TGL_EVALUASI');
            $table->string('RESPON_MEDIS', 1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluasi');
    }
}

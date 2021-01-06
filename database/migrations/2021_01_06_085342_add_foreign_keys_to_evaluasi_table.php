<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEvaluasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evaluasi', function (Blueprint $table) {
            $table->foreign('ID_DOKTER', 'FK_MELAKUKAN1')->references('ID_DOKTER')->on('dokter')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_PEMERIKSAAN', 'FK_MEMILIKI')->references('ID_PEMERIKSAAN')->on('pemeriksaan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evaluasi', function (Blueprint $table) {
            $table->dropForeign('FK_MELAKUKAN1');
            $table->dropForeign('FK_MEMILIKI');
        });
    }
}

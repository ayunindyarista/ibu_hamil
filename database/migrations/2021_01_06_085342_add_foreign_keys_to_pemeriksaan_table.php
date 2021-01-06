<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPemeriksaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemeriksaan', function (Blueprint $table) {
            $table->foreign('ID_RELAWAN', 'FK_MELAKUKAN')->references('ID_RELAWAN')->on('relawan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_PASIEN', 'FK_MENJALANI')->references('ID_PASIEN')->on('pasien')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemeriksaan', function (Blueprint $table) {
            $table->dropForeign('FK_MELAKUKAN');
            $table->dropForeign('FK_MENJALANI');
        });
    }
}

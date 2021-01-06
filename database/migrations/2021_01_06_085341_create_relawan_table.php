<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relawan', function (Blueprint $table) {
            $table->string('ID_RELAWAN', 8)->primary();
            $table->string('NAMA', 50);
            $table->string('ALAMAT', 100);
            $table->string('NO_TELP', 13);
            $table->string('NIK', 16);
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
        Schema::dropIfExists('relawan');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaanLahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunaan_lahan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kecamatan_id');
            $table->foreignId('komoditi_id');
            $table->integer('luas_penggunaan_lahan');
            $table->integer('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penggunaan_lahan');
    }
}

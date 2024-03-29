<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotensiLahanPertanianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potensi_lahan_pertanian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kecamatan_id');
            $table->integer('tahun');
            $table->integer('luas_lahan_kosong');
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
        Schema::dropIfExists('potensi_lahan_pertanian');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomoditiHasilPanenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komoditi_hasil_panen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_komoditi');
            $table->string('lokasi_komoditi');
            $table->integer('jmlh_komoditi');
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
        Schema::dropIfExists('komoditi_hasil_panen');
    }
}

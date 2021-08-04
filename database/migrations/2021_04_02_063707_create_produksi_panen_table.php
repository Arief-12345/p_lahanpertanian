<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksiPanenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksi_panen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kecamatan_id');
            $table->foreignId('komoditi_id');
            $table->integer('tahun');
            $table->integer('jmlh_produksi');
            $table->float('nilai_hasil_produksi')->nullable();
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
        Schema::dropIfExists('produksi_panen');
    }
}

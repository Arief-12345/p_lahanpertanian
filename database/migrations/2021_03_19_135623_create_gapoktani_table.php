<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGapoktaniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gapoktani', function (Blueprint $table) {
            $table->id();
            $table->string('nama_gapoktani');
            $table->string('ketua_gapoktani');
            $table->integer('jmlh_anggota');
            $table->string('lokasi_gapoktani');
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
        Schema::dropIfExists('gapoktani');
    }
}

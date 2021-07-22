<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGapoktaniBaruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gapoktani_baru', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kecamatan_id');
            $table->string('nama_gapoktani', 30);
            $table->string('ketua_gapoktani', 30);
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
        Schema::dropIfExists('gapoktani_baru');
    }
}

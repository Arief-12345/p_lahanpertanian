<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaikantorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawaikantor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nip', 18);
            $table->string('email', 150);
            $table->string('name', 30);
            $table->string('username', 130);
            $table->string('password', 150);
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
        Schema::dropIfExists('pegawaikantor');
    }
}

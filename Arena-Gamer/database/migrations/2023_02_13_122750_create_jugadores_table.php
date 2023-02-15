<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nick');
            $table->string('país');
            $table->string('email');
            $table->string('password');
            $table->date('fnacimiento');
            $table->string('imagen');
            $table->foreignId('id_juego_favorito')->reference('id')->on('juegos');
            $table->string('nivel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadores');
    }
};

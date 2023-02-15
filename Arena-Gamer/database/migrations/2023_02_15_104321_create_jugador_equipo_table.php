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
        Schema::create('jugador_equipo', function (Blueprint $table) {
            $table->primary(['jugador_id', 'equipo_id']);
            $table->foreignId('jugador_id')->reference('id')->on('jugadores');
            $table->foreignId('equipo_id')->reference('id')->on('equipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugador_equipo');
    }
};

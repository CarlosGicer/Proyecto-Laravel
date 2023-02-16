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
        Schema::create('equipo_torneo', function (Blueprint $table) {
            $table->primary(['equipo_id', 'torneo_id']);
            $table->foreignId('equipo_id')->reference('id')->on('equipos');
            $table->foreignId('torneo_id')->reference('id')->on('torneos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo_torneo');
    }
};
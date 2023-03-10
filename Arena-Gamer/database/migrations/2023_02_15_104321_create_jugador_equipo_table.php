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
            $table->primary(['user_id', 'equipo_id']);
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->foreignId('equipo_id')->references('id')->on('equipos')->onDelete('cascade');;
            $table->timestamp('created_at')->nullable();
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

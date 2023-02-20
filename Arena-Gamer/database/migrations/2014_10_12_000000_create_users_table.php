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
        Schema::create('users', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('nick');
            $table->string('país');
            $table->string('rol')->default('usuario');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('fnacimiento');
            $table->string('imagen')->nullable();
            $table->foreignId('juego_favorito_id')->references('id')->on('juegos')->nullable();
            $table->enum('nivel',['principiante','intermedio','alto'])->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

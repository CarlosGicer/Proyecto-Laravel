<?php
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\carbon;

class jugadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jugadores')->insert([
            'id' => rand(1,100),
            'nick' => Str::random(10),
            'país' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'fnacimiento' => Carbon::now(),
            'imagen' => Str::random(20),
            'id_juego_favorito' => rand(1,100),
            'nivel' => rand(1,100),
        ]);
    }
}

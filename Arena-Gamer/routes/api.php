<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\TorneoResource;
use App\Http\Resources\EquipoResource;
use App\Http\Resources\UserResource;
use App\Models\Equipo;
use App\Models\Sendero;
use App\Models\Grupo;
use App\Models\Torneo;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//JSON de todos los torneos

Route::get('/1.0/torneos', function(Torneo $torneos){

    return new TorneoResource(Torneo::all());
});


//Torneos activos
Route::get('/1.0/torneos/activos', function(){

    return TorneoResource::collection(Torneo::where('estado','activo')->get());

});

//Torneos por id
Route::get('/1.0/torneo/{id}', function ($id){
    return new TorneoResource(Torneo::findOrFail($id));
});

//Jugadores de equipos en el torneo
Route::get('/1.0/torneo/{id}/equipos', function($id){
    $torneo = Torneo::findOrFail($id);
    $equipos = $torneo->equipos()->get();
    foreach($equipos as $equipo){
        $jugadores = $equipo->componentes()->get();
    }
    return new TorneoResource(['torneo' => $torneo, 'equipo' => $equipo, 'jugadores'=>$jugadores]);
});


//Mostrar datos de equipos 1v1
Route::get('/1.0/equipos/1', function(){
    return EquipoResource::collection(Equipo::where('modalidad',1)->get());
});

//Mostrar datos de equipos 2v2
Route::get('/1.0/equipos/2', function(){
    return EquipoResource::collection(Equipo::where('modalidad',2)->get());
});

//Mostrar datos de equipos 3v3
Route::get('/1.0/equipos/3', function(){
    return EquipoResource::collection(Equipo::where('modalidad',3)->get());
});

//Mostrar datos de equipos 4v4
Route::get('/1.0/equipos/4', function(){
    return EquipoResource::collection(Equipo::where('modalidad',4)->get());
});

//Mostrar datos de equipos 5v5
Route::get('/1.0/equipos/5', function(){
    return EquipoResource::collection(Equipo::where('modalidad',5)->get());
});


//Torneos activos
Route::get('/1.0/equipos/activos', function(){
    return TorneoResource::collection(Torneo::where('estado','activo')->get());
});


Route::get('/1.0/jugadores', function(){
    return new UserResource(User::all());
});

Route::get('/1.0/jugadores/{nivel}', function($nivel){
    return UserResource::collection(User::where('nivel',$nivel)->get());
});

Route::post('/1.0/torneos/{id}/registrar',  function (Request $request, $id) {
    $torneo = Torneo::find($id);
    $equipo_id = $request->equipo;
    $torneo->equipos()->attach($equipo_id);
    return response()->json(['msg:' => 'Equipo agregado']);
});


//CREAR TOKEN
Route::post('/1.0/tokens/create', function (Request $request) {
  
    $user = User::where('email', $request->email)->first();
  
    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['error' => 'Usuario o contraseña incorrectos']);
        /*
        throw ValidationException::withMessages([
          'email' => ['The provided credentials are incorrect.'],
        ]);
        */
    }

    $token = $user->createToken($request->email);
 
    return response()->json(['token' => $token->plainTextToken]);
});


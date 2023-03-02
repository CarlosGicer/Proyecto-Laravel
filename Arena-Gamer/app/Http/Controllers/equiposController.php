<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Equipo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class equiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.equipos', ['equipos' => Equipo::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.formNuevoEquipo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    

        $equipo = new Equipo();
        $equipo->nombre = $request->input('nombre');

        $path = $request->file('imagen')->store('public');
        // /public/nombreimagengenerado.jpg
        //Cambiamos public por storage en la BBDD para que se pueda ver la imagen en la web
        $equipo->imagen =  str_replace('public', 'storage', $path);

        $equipo->modalidad = $request->input('modalidad');
        $equipo->estado = $request->input('estado');
 

       $equipo->save();

       return redirect('equipos/');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
        return view('web.equipoDetalle' , ['equipo' => $equipo, 'jugadores' => $equipo->componentes()->orderBy('nick', 'asc')->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        return redirect('/equipos');
    }

    public function inscribirse(Equipo $equipo, User $user)
    {
        if ($equipo->componentes()->where('user_id', $user->id)->get()->count() == 0)
            $equipo->componentes()->attach($user->id, ['created_at' => Carbon::now()]);

            return redirect('equipos/'.$equipo->id);
    }

    public function desinscribirse(Equipo $equipo, User $user)
    {
        if ($equipo->componentes()->where('user_id', $user->id)->get()->count() == 1)
            $equipo->componentes()->detach($user->id);

            return redirect('equipos/'.$equipo->id);
    }
}

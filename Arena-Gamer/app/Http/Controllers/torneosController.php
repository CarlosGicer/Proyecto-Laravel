<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Juego;
use App\Models\Torneo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class torneosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        return view('web.torneos', ['torneos' => Torneo::paginate(4), 'juegos' => Juego::all() ]);
    }

    
    public function indexAdmin()
    {
        return view('admin.adminTorneos', ['torneos' => Torneo::paginate(8), 'juegos' => Juego::all() ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formNuevoTorneo', ['juegos' => Juego::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $torneo = new Torneo();
        $torneo->nombre = $request->input('nombre');
        $torneo->fecha = $request->input('fecha');
        $torneo->max_equipos = $request->input('max_equipos');
        $torneo->modalidad = $request->input('modalidad');
        $torneo->estado = $request->input('estado');
        $torneo->nivel = $request->input('nivel');
        $torneo->juego_id = $request->input('juego_id');

        $torneo->save();

        return redirect('/torneos/admin/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Torneo $torneo)
    {
        return view('web.torneoDetalle', ['torneo' => $torneo, 'equipos' => $torneo->equipos()->orderBy('nombre', 'asc')->get(), 'juegos' => Juego::all()]);
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
    public function destroy(Torneo $torneo)
    {
        $torneo->delete();
        return redirect('/torneos/admin/admin');
    }


    public function inscribir(Torneo $torneo)
    {
        //Sacar todos los grupo del usuario logueado
        $equipos = Auth::user()->equipos()->get();

        return view('web.formRegistrarEquipo', ['equipos' => $equipos, 'torneo' => $torneo]);
    }

    public function registrar(Torneo $torneo, Request $request)
    {
        $equipo_id = $request->equipo;

        $torneo->equipos()->attach($equipo_id);

        $equipos = Auth::user()->equipos()->get();
        return redirect('torneos/'.$torneo->id);
    }

    public function desinscribir(Torneo $torneo, Equipo $equipo)
    {
        if ($torneo->equipos()->where('equipo_id', $equipo->id)->get()->count() == 1)
            $torneo->equipos()->detach($equipo->id);

            return redirect('torneos/'.$torneo->id);
    }
}

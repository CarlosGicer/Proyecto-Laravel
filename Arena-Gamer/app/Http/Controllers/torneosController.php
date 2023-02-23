<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Torneo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class torneosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.torneos', [ 'torneos' => Torneo::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Torneo $torneo)
    {
        return view('web.torneoDetalle', ['torneo' => $torneo]);
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
    public function destroy($id)
    {
        //
    }


    public function inscribirse(Torneo $torneo , Equipo $equipo)
    {
        if ($torneo->componentes()->where('equipo_id', $equipo->id)->get()->count() == 0)
            $torneo->componentes()->attach($equipo->id, ['created_at' => Carbon::now()]);

        return view('web.torneoDetalle', ['torneo' => $torneo, 'equipo' => $torneo->componentes()->orderBy('nombre', 'asc')->get()]);
    }

    public function desinscribirse(Torneo $torneo , Equipo $equipo)
    {
        if ($torneo->componentes()->where('equipo_id', $equipo->id)->get()->count() == 1)
            $torneo->componentes()->detach($equipo->id);

        return view('web.torneoDetalle', ['torneo' => $torneo, 'equipo' => $torneo->componentes()->orderBy('nombre', 'asc')->get()]);
    }
}
